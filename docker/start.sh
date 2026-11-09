#!/usr/bin/env bash
set -e
cd /var/www/html

# Le volume Railway (monté sur /data) garde la base et les photos entre deux mises à jour.
mkdir -p /data/storage-public
touch /data/database.sqlite
rm -rf storage/app/public && ln -s /data/storage-public storage/app/public
mkdir -p storage/framework/{cache,sessions,views} storage/logs bootstrap/cache
chown -R www-data:www-data /data storage bootstrap/cache

# Clé de chiffrement : si APP_KEY n'est pas définie dans Railway, on en crée une
# une seule fois et on la garde dans /data (sinon les sessions sautent à chaque mise à jour).
if [ -z "${APP_KEY}" ]; then
  if [ ! -s /data/app_key ]; then
    echo "base64:$(head -c 32 /dev/urandom | base64)" > /data/app_key
    chmod 600 /data/app_key
  fi
  export APP_KEY="$(cat /data/app_key)"
fi
export APP_NAME=${APP_NAME:-Fabara}
export APP_LOCALE=${APP_LOCALE:-fr}
export APP_FALLBACK_LOCALE=${APP_FALLBACK_LOCALE:-fr}
if [ -z "${APP_URL}" ] && [ -n "${RAILWAY_PUBLIC_DOMAIN}" ]; then export APP_URL="https://${RAILWAY_PUBLIC_DOMAIN}"; fi
export LOG_CHANNEL=${LOG_CHANNEL:-stderr}

export DB_CONNECTION=sqlite
export DB_DATABASE=/data/database.sqlite
export APP_ENV=${APP_ENV:-production}
export APP_DEBUG=${APP_DEBUG:-false}
export SESSION_DRIVER=${SESSION_DRIVER:-database}
export CACHE_STORE=${CACHE_STORE:-database}
export QUEUE_CONNECTION=${QUEUE_CONNECTION:-sync}

php artisan migrate --force
# Première fois seulement : sous-menus + compte administrateur (ADMIN_EMAIL / ADMIN_PASSWORD)
if [ "$(php artisan tinker --execute='echo \App\Models\User::count();' 2>/dev/null | tail -n1)" = "0" ]; then
  php artisan db:seed --force
fi
# Catalogue Fabara (photos, prix, promotions, tailles) : appliqué une seule fois par version.
# Une copie de la base est gardée dans /data avant le remplacement.
# Pour le réappliquer après avoir modifié database/seeders/fabara/articles.csv, augmentez ce numéro.
CATALOGUE_VERSION=2
if [ ! -f "/data/.catalogue-fabara-v${CATALOGUE_VERSION}" ]; then
  cp /data/database.sqlite "/data/sauvegarde-avant-catalogue-v${CATALOGUE_VERSION}.sqlite" || true
  php artisan fabara:catalogue --force && touch "/data/.catalogue-fabara-v${CATALOGUE_VERSION}"
fi
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true
chown -R www-data:www-data /data storage bootstrap/cache

# Un seul module MPM pour Apache (mod_php a besoin de prefork)
rm -f /etc/apache2/mods-enabled/mpm_event.* /etc/apache2/mods-enabled/mpm_worker.*
[ -e /etc/apache2/mods-enabled/mpm_prefork.load ] || a2enmod mpm_prefork >/dev/null

# Apache doit écouter sur le port donné par l'hébergeur
PORT=${PORT:-8080}
sed -ri "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf
exec apache2-foreground
