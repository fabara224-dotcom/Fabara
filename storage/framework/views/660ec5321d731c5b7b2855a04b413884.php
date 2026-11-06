<?php ($wa = \App\Support\Setting::whatsapp()); ?>
<?php ($slides = [
    ['e' => 'Nouvelle collection', 'h' => 'Brillez à chaque', 'em' => 'cérémonie', 'p' => 'Robes longues en promotion : 450 000 GNF au lieu de 500 000. Tailles L à 4XL.', 'img' => 'soiree-vert-2', 'to' => route('category', ['boutique', 'robes-de-soiree'])],
    ['e' => 'Collection homme', 'h' => 'L’élégance', 'em' => 'au masculin', 'p' => 'Ensembles brodés, rayés et tuniques de cérémonie.', 'img' => 'h-raye-vert', 'to' => route('category', ['boutique', 'mode-homme'])],
    ['e' => 'Tout en blanc', 'h' => 'La robe blanche', 'em' => 'broderie anglaise', 'p' => '4 modèles élégants, du L au 4XL.', 'img' => 'blanche-broderie', 'to' => route('category', ['boutique', 'robes-blanches'])],
    ['e' => 'Beauté & soins', 'h' => 'Votre routine beauté', 'em' => 'au quotidien', 'p' => 'Savons Asantee, Jam, La Belle, Luffa, Alata Garden et laits corporels de Thaïlande.', 'img' => 'affiche-beaute', 'to' => route('category', ['boutique', 'beaute-soins'])],
    ['e' => 'Élégance au quotidien', 'h' => 'Votre style,', 'em' => 'livré chez vous', 'p' => 'Robes, ensembles et tenues pour toutes les occasions. Livraison à Conakry et dans toute la Guinée.', 'img' => 'portefeuille-rose', 'to' => route('category', ['boutique', 'mode-femme'])],
]); ?>
<?php $__env->startPush('styles'); ?>
.fb-hero{position:relative;overflow:hidden;background:#fff;border-bottom:1px solid var(--line)}
.fb-slide{display:none;grid-template-columns:1.1fr .9fr;gap:24px;align-items:center;padding-block:40px 54px}
.fb-slide.on{display:grid;animation:fbfade .6s ease}
@keyframes fbfade{from{opacity:.4;transform:translateY(6px)}to{opacity:1;transform:none}}
.fb-ey{display:inline-block;background:#fff;color:var(--orange);border:1px solid var(--line);padding:5px 12px;border-radius:999px;font-size:12px;font-weight:600;letter-spacing:.6px;text-transform:uppercase}
.fb-hero h1{font-size:clamp(32px,5vw,56px);font-weight:800;letter-spacing:-.5px;line-height:1.08;margin:16px 0 14px;text-transform:uppercase}
.fb-hero h1 em{font-style:normal;color:var(--orange)}
.fb-hero p{font-size:17px;color:var(--muted);max-width:44ch;margin:0 0 24px}
.fb-hero .btns{display:flex;gap:10px;flex-wrap:wrap}
.fb-art{position:relative;display:grid;place-items:center;min-height:320px}
.fb-art .blob{position:absolute;width:360px;height:360px;max-width:90%;aspect-ratio:1;border-radius:50%;background:radial-gradient(circle,var(--orange-2),var(--orange) 60%,transparent 61%);opacity:.9}
.fb-photo{position:relative;width:min(340px,82%);aspect-ratio:4/5;max-width:100%;border-radius:28px;overflow:hidden;box-shadow:0 24px 50px rgba(0,0,0,.25);border:5px solid #fff}
.fb-photo img{width:100%;height:100%;object-fit:cover;object-position:top}
.fb-pills{position:absolute;right:0;top:50%;transform:translateY(-50%);display:flex;flex-direction:column;gap:10px}
.fb-pill{display:flex;gap:10px;align-items:center;background:#fff;box-shadow:var(--shadow);border:1px solid var(--line);border-radius:16px;padding:10px 14px;font-size:13px;font-weight:600;max-width:200px}
.fb-pill svg{width:22px;height:22px;flex:none;color:var(--orange)}
.fb-dots{position:absolute;bottom:18px;left:50%;transform:translateX(-50%);display:flex;gap:8px}
.fb-dots button{width:9px;height:9px;border-radius:50%;background:var(--line);transition:width .3s}
.fb-dots button.on{width:26px;border-radius:5px;background:var(--orange)}
.fb-cats{display:grid;grid-template-columns:repeat(7,1fr);gap:16px 10px}
.fb-cat{display:flex;flex-direction:column;align-items:center;gap:8px;text-align:center;font-size:12.5px;font-weight:500;line-height:1.3}
.fb-cat .disc{width:100%;max-width:96px;aspect-ratio:1;border-radius:50%;overflow:hidden;position:relative;background:var(--orange-soft);border:3px solid #fff;box-shadow:0 0 0 1px var(--line),var(--shadow);transition:transform .2s,box-shadow .2s;display:grid;place-items:center;font-size:34px}
.fb-cat .disc img{width:100%;height:100%;object-fit:cover;object-position:top}
.fb-cat:hover .disc{transform:translateY(-4px);box-shadow:0 0 0 2px var(--orange),var(--shadow)}
.fb-cat .disc b{position:absolute;inset:0;display:grid;place-items:center;background:rgba(234,88,12,.72);color:#fff;font-size:20px;font-weight:800}
.fb-banners{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.fb-banner{position:relative;overflow:hidden;border-radius:18px;padding:24px;min-height:178px;display:flex;flex-direction:column;align-items:flex-start;gap:6px}
.fb-banner h3{font-size:22px;font-weight:700;max-width:12ch;position:relative;z-index:1}
.fb-banner p{margin:0 0 10px;font-size:14px;max-width:16ch;opacity:.85;position:relative;z-index:1}
.fb-banner .go{margin-top:auto;font-weight:600;font-size:14px;padding:9px 16px;border-radius:999px;color:#fff;position:relative;z-index:1}
.fb-banner img{position:absolute;right:0;bottom:0;width:44%;height:100%;object-fit:cover;-webkit-mask-image:linear-gradient(90deg,transparent,#000 35%);mask-image:linear-gradient(90deg,transparent,#000 35%)}
.fb-banner img.top{object-position:top}
.b1{background:linear-gradient(135deg,#ffe4ec,#fbcfe8);color:#831843}.b1 .go{background:#db2777}
.b2{background:linear-gradient(135deg,#f1f5f9,#e2e8f0);color:#0f172a}.b2 .go{background:#0f172a}
.b3{background:linear-gradient(135deg,#ffedd5,#fed7aa);color:#7c2d12}.b3 .go{background:var(--orange)}
.fb-perks{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;background:var(--orange-soft);border-radius:18px;padding:22px}
.fb-perk{display:flex;gap:14px;align-items:flex-start}
.fb-perk svg{width:36px;height:36px;flex:none;color:var(--orange-dark)}
.fb-perk b{display:block;font-size:14.5px}
.fb-perk small{color:var(--muted);font-size:12.5px}
.fb-promo{background:linear-gradient(180deg,#fff0f3,#fff);border:1px solid var(--line);border-radius:18px;padding:22px}
.fb-promo h2{color:var(--sale)}
.fb-promo h2 svg{color:var(--sale)}
.fb-timer{display:flex;gap:14px;align-items:center}
.fb-timer div{text-align:center;line-height:1}
.fb-timer b{display:block;font-size:24px;font-weight:700;color:var(--sale)}
.fb-timer small{font-size:11px;color:var(--muted)}
.fb-impress{display:grid;grid-template-columns:1fr minmax(0,520px);gap:24px;align-items:center;background:var(--fg);color:#fff;border-radius:18px;padding:28px}
.fb-impress h2{font-size:clamp(22px,3vw,30px);font-weight:700}
.fb-impress h2 i{font-style:normal;color:var(--orange-2)}
.fb-impress p{margin:8px 0 0;opacity:.8;max-width:60ch}
.fb-tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px}
.fb-tags span{border:1px solid rgba(255,255,255,.4);border-radius:999px;padding:4px 12px;font-size:12.5px}
.fb-gal{display:grid;grid-template-columns:repeat(3,1fr);gap:10px}
.fb-gal img{width:100%;aspect-ratio:3/2;object-fit:cover;border-radius:12px}
.fb-gal img:first-child{grid-column:span 3}
.fb-side{display:grid;gap:16px;width:100%}
.fb-side .fb-btn{justify-self:start}
@media (max-width:1100px){.fb-pills{display:none}}
@media (max-width:820px){
  .fb-slide{grid-template-columns:1fr;padding-block:28px 48px}.fb-art{min-height:220px;order:-1}.fb-art .blob{width:220px;height:220px}.fb-photo{width:210px}
  .fb-cats{grid-template-columns:repeat(4,1fr)}.fb-banners{grid-template-columns:1fr}.fb-perks{grid-template-columns:1fr 1fr}.fb-impress{grid-template-columns:1fr}
}
@media (max-width:480px){.fb-cats{grid-template-columns:repeat(4,1fr);gap:12px 6px}.fb-cat{font-size:11px}.fb-perks{grid-template-columns:1fr}.fb-timer b{font-size:20px}.fb-banner h3{font-size:20px}.fb-banner img{width:40%}}
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="fb-hero">
  <div class="fb-wrap" id="slides">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['fb-slide', 'on' => $i === 0]); ?>">
        <div>
          <span class="fb-ey"><?php echo e($s['e']); ?></span>
          <h1><?php echo e($s['h']); ?><br><em><?php echo e($s['em']); ?></em></h1>
          <p><?php echo e($s['p']); ?></p>
          <div class="btns">
            <a class="fb-btn" href="<?php echo e($s['to']); ?>">Découvrir maintenant →</a>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($wa): ?><a class="fb-btn ghost" target="_blank" rel="noopener" href="https://wa.me/<?php echo e($wa); ?>">WhatsApp</a><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>
        </div>
        <div class="fb-art">
          <div class="blob"></div>
          <div class="fb-photo"><img src="<?php echo e(asset('images/site/' . $s['img'] . '.webp')); ?>" alt="" <?php if($i): ?> loading="lazy" <?php endif; ?>></div>
          <div class="fb-pills">
            <div class="fb-pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h11v9H3zM14 10h4l3 3v3h-7"/><circle cx="7" cy="18" r="1.8"/><circle cx="17" cy="18" r="1.8"/></svg>Livraison dans toute la Guinée</div>
            <div class="fb-pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="6" width="18" height="12" rx="2"/><path d="M3 10h18"/></svg>Orange Money, MoMo ou cash</div>
            <div class="fb-pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="m8.5 12 2.5 2.5 4.5-5"/></svg>Qualité garantie</div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </div>
  <div class="fb-dots" id="dots"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><button type="button" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['on' => $i === 0]); ?>" aria-label="Diapositive <?php echo e($i + 1); ?>"></button><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
</div>


<section class="fb-wrap fb-sec" id="rayons">
  <div class="fb-cats">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories->where('products_count', '>', 0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="fb-cat" href="<?php echo e(route('category', [$c->menu, $c->slug])); ?>">
        <span class="disc"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($t = $c->thumb()): ?><img src="<?php echo e($t); ?>" alt="" loading="lazy"><?php else: ?><?php echo e($c->icon()); ?><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></span><?php echo e($c->name); ?>

      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <a class="fb-cat" href="<?php echo e(route('promotions')); ?>">
      <span class="disc"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($promoThumb): ?><img src="<?php echo e($promoThumb); ?>" alt="" loading="lazy"><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?><b>%</b></span>Promotions
    </a>
  </div>
</section>


<section class="fb-wrap fb-sec">
  <div class="fb-banners">
    <a class="fb-banner b1" href="<?php echo e(route('category', ['boutique', 'beaute-soins'])); ?>"><h3>Savons &amp; soins de Thaïlande</h3><p>Asantee, Jam, La Belle, Luffa et Alata Garden</p><span class="go">Voir les produits →</span><img src="<?php echo e(asset('images/site/b-asantee-riz.webp')); ?>" alt="" loading="lazy"></a>
    <a class="fb-banner b2" href="<?php echo e(url('/')); ?>#impress"><h3>Impress by Fabara</h3><p>Cachets, cartes de visite, casquettes brodées</p><span class="go">Commander →</span><img src="<?php echo e(asset('images/site/impress-cachets.webp')); ?>" alt="" loading="lazy"></a>
    <a class="fb-banner b3" href="<?php echo e(route('category', ['boutique', 'robes-de-soiree'])); ?>"><h3>Robes de soirée</h3><p>450 000 GNF au lieu de 500 000, du L au 4XL</p><span class="go">Voir la collection →</span><img class="top" src="<?php echo e(asset('images/site/soiree-corail.webp')); ?>" alt="" loading="lazy"></a>
  </div>
</section>

<?php ($blocks = [
    ['femme', 'Nouvelle collection Femme', route('category', ['boutique', 'robes-de-soiree']), '<path d="M12 2l2.4 6.9H22l-6 4.6 2.3 7L12 16.2 5.7 20.5 8 13.5 2 8.9h7.6z" fill="currentColor"/>'],
    ['homme', 'Collection Homme', route('category', ['boutique', 'mode-homme']), '<path d="M8 3 3 6l2 5 3-1v11h8V10l3 1 2-5-5-3c-.5 2-2 3-4 3S8.5 5 8 3z" fill="none" stroke="currentColor" stroke-width="2"/>'],
    ['beaute', 'Beauté & soins de Thaïlande', route('category', ['boutique', 'beaute-soins']), '<path d="M12 2c3 4 6 7.5 6 11a6 6 0 0 1-12 0c0-3.5 3-7 6-11z" fill="currentColor"/>'],
]); ?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$key, $title, $more, $icon]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sections[$key]->count()): ?>
    <section class="fb-wrap fb-sec">
      <div class="fb-sh"><h2><svg viewBox="0 0 24 24"><?php echo $icon; ?></svg><?php echo e($title); ?></h2><a class="fb-link" href="<?php echo e($more); ?>">Tout voir →</a></div>
      <div class="fb-grid"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sections[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $__env->make('site._card', ['p' => $p, 'scope' => '-' . $key], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
    </section>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<section class="fb-wrap fb-sec">
  <div class="fb-perks">
    <div class="fb-perk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 7h11v9H3zM14 10h4l3 3v3h-7"/><circle cx="7" cy="18" r="1.8"/><circle cx="17" cy="18" r="1.8"/></svg><div><b>Livraison rapide</b><small>Conakry en 24 h, intérieur du pays sur demande</small></div></div>
    <div class="fb-perk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M10 18h4M9 7h6M9 11h6"/></svg><div><b>Paiement flexible</b><small>Orange Money, MTN MoMo ou à la livraison</small></div></div>
    <div class="fb-perk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="m8.5 12 2.5 2.5 4.5-5"/></svg><div><b>Qualité garantie</b><small>Chaque article est vérifié en boutique</small></div></div>
    <div class="fb-perk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s-7-6-7-11a7 7 0 0 1 14 0c0 5-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg><div><b>Venez nous voir</b><small><?php echo e(\App\Support\Setting::get('address') ?: 'Dixinn, Pharmaguinée, en face de Marocana'); ?></small></div></div>
  </div>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sections['promos']->count()): ?>
  <section class="fb-wrap fb-sec">
    <div class="fb-promo">
      <div class="fb-sh">
        <h2><svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 2 4 14h7l-1 8 9-12h-7z"/></svg>Promotions du moment</h2>
        <div class="fb-timer fb-num" id="timer" aria-label="Fin des promotions"></div>
      </div>
      <div class="fb-grid g4"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sections['promos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $__env->make('site._card', ['p' => $p, 'scope' => '-promo'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
      <p style="text-align:center;margin:18px 0 0"><a class="fb-link" href="<?php echo e(route('promotions')); ?>">Voir toutes les promotions →</a></p>
    </div>
  </section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<section class="fb-wrap fb-sec" id="impress">
  <div class="fb-impress">
    <div>
      <h2>Besoin d’impression ? <i>Impress</i> by Fabara</h2>
      <p>Dans la même boutique : nous imprimons vos cachets, cartes de visite, calendriers, agendas, casquettes brodées, éventails, T-shirts et polos personnalisés.</p>
      <div class="fb-tags"><span>Cachets</span><span>Cartes de visite</span><span>Casquettes brodées</span><span>Éventails de mariage</span><span>Calendriers</span><span>Sacs kraft</span><span>Badges &amp; cordons</span></div>
    </div>
    <div class="fb-side">
      <div class="fb-gal">
        <img src="<?php echo e(asset('images/site/impress-cachets.webp')); ?>" alt="Cachets Fabara Impress" loading="lazy">
        <img src="<?php echo e(asset('images/site/impress-cartes.webp')); ?>" alt="Cartes de visite" loading="lazy">
        <img src="<?php echo e(asset('images/site/impress-calendriers.webp')); ?>" alt="Calendriers et agendas" loading="lazy">
        <img src="<?php echo e(asset('images/site/impress-badges.webp')); ?>" alt="Badges et cordons" loading="lazy">
      </div>
      <a class="fb-btn" href="#devis">Demander un devis →</a>
    </div>
  </div>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sections['impress']->count()): ?>
  <section class="fb-wrap fb-sec">
    <div class="fb-sh"><h2><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9V3h12v6M6 18H4a1 1 0 0 1-1-1v-6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a1 1 0 0 1-1 1h-2"/><rect x="6" y="14" width="12" height="7"/></svg>Commandez vos impressions</h2><a class="fb-link" href="#devis">Demander un devis →</a></div>
    <div class="fb-grid"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sections['impress']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $__env->make('site._card', ['p' => $p, 'scope' => '-imp'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
  </section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
(() => {
  const slides = document.querySelectorAll('.fb-slide'), dots = document.querySelectorAll('#dots button');
  let cur = 0, auto;
  const show = k => { cur = k; slides.forEach((el, j) => el.classList.toggle('on', j === k)); dots.forEach((el, j) => el.classList.toggle('on', j === k)) };
  const restart = () => { clearInterval(auto); if (!matchMedia('(prefers-reduced-motion: reduce)').matches) auto = setInterval(() => show((cur + 1) % slides.length), 5500) };
  dots.forEach((b, k) => b.onclick = () => { show(k); restart() });
  restart();
  const timer = document.getElementById('timer');
  if (timer) {
    const tick = () => {
      const now = new Date(), end = new Date(now); end.setDate(now.getDate() + ((7 - now.getDay()) % 7 || 7)); end.setHours(23, 59, 59, 0);
      let s = Math.max(0, Math.floor((end - now) / 1000)); const d = Math.floor(s / 86400); s %= 86400;
      timer.innerHTML = [[d, 'Jours'], [Math.floor(s / 3600), 'Heures'], [Math.floor(s % 3600 / 60), 'Min'], [s % 60, 'Sec']].map(([v, l]) => `<div><b>${String(v).padStart(2, '0')}</b><small>${l}</small></div>`).join('');
    };
    tick(); setInterval(tick, 1000);
  }
})();
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/home.blade.php ENDPATH**/ ?>