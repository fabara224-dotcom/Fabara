<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
@php($company = \App\Support\Setting::get('company_name') ?: 'Fabara')
<title>@yield('title', 'Fabara-boutique.com — Mode, beauté & impression')</title>
<meta name="description" content="@yield('description', 'Fabara Boutique à Conakry : robes de soirée, tenues homme, savons et soins de Thaïlande, et impression personnalisée avec Impress. Commande sur WhatsApp.')">
<meta name="theme-color" content="#ea580c">
<link rel="icon" href="{{ asset('images/logo.jpg') }}">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite('resources/css/app.css')
@else
  {{-- Utilisé par les pages compte, connexion, suivi et pages légales --}}
  <script src="https://cdn.tailwindcss.com"></script>
  <script>if (window.tailwind) tailwind.config={theme:{extend:{colors:{fred:'#ea580c',fpink:'#ea580c',fgreen:'#16a34a',fyellow:'#f59e0b'}}}}</script>
@endif
<style>
:root{
  --orange:#ea580c; --orange-2:#f97316; --orange-dark:#c2410c; --orange-soft:#fff4ec;
  --fg:#1f1916; --muted:#6f625a; --line:#f1e4da; --bg:#ffffff; --sale:#e11d48; --wa:#1fa855;
  --shadow:0 6px 24px rgba(194,65,12,.10); --r:14px; color-scheme:light;
}
*{box-sizing:border-box}
html{-webkit-text-size-adjust:100%}
body{margin:0;background:var(--bg);color:var(--fg);font-family:"Poppins",system-ui,-apple-system,"Segoe UI",sans-serif;font-size:14px;line-height:1.55;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
button{font:inherit;cursor:pointer;border:0;background:none;color:inherit}
img{max-width:100%;display:block}
:focus-visible{outline:3px solid var(--orange);outline-offset:2px;border-radius:6px}
.fb-wrap{max-width:1200px;margin:0 auto;padding-left:max(16px,env(safe-area-inset-left,0px));padding-right:max(16px,env(safe-area-inset-right,0px))}
.fb-num{font-variant-numeric:tabular-nums}
h1,h2,h3{line-height:1.15;text-wrap:balance;margin:0}

/* Bandeau */
.fb-top{background:var(--orange-dark);color:#fff;font-size:12.5px}
.fb-top .fb-wrap{display:flex;gap:26px;align-items:center;padding-block:8px;overflow-x:auto;white-space:nowrap;scrollbar-width:none}
.fb-top span,.fb-top a{display:inline-flex;align-items:center;gap:7px}
.fb-top svg{width:15px;height:15px;flex:none}
.fb-top .ml{margin-left:auto}

/* En-tête */
.fb-header{position:sticky;top:0;z-index:50;background:#fff;border-bottom:1px solid var(--line)}
.fb-head{display:flex;align-items:center;gap:20px;padding-block:14px}
.fb-logo{display:flex;flex-direction:column;line-height:1}
.fb-logo b{font-weight:800;font-size:26px;letter-spacing:-.8px;color:var(--fg);white-space:nowrap}
@media(max-width:640px){.fb-logo b{font-size:20px}}
.fb-logo b i{font-style:normal;color:var(--orange)}
.fb-logo img{display:block;height:64px;width:auto}
.fb-logo small{font-size:11px;color:var(--muted);margin-top:4px}
.fb-search{flex:1;display:flex;min-width:0;border:1.5px solid var(--line);border-radius:999px;overflow:hidden;background:#fff}
.fb-search input{flex:1;min-width:0;border:0;background:transparent;padding:11px 18px;font:inherit;color:var(--fg);outline:none}
.fb-search button{background:var(--orange);color:#fff;padding:0 20px;display:grid;place-items:center}
.fb-search svg{width:20px;height:20px}
.fb-icons{display:flex;gap:4px}
.fb-ib{display:flex;flex-direction:column;align-items:center;gap:2px;font-size:11.5px;color:var(--muted);padding:4px 8px;position:relative}
.fb-ib svg{width:24px;height:24px;color:var(--fg)}
.fb-badge{position:absolute;top:-2px;right:4px;background:var(--orange);color:#fff;font-size:11px;font-weight:700;min-width:18px;height:18px;border-radius:9px;display:grid;place-items:center;padding:0 4px;font-style:normal}
.fb-nav{display:flex;gap:4px;align-items:center;padding-bottom:12px;overflow-x:auto;scrollbar-width:none}
.fb-nav a{white-space:nowrap;padding:8px 13px;border-radius:10px;font-size:13.5px;font-weight:500}
.fb-nav a:hover{background:var(--orange-soft)}
.fb-nav a.on{background:var(--orange-soft);color:var(--orange-dark);font-weight:600}
.fb-nav .all{background:var(--orange);color:#fff;font-weight:600;display:flex;gap:8px;align-items:center}
.fb-nav .all:hover{background:var(--orange-dark)}
.fb-flash{background:#ecfdf5;color:#065f46;border-bottom:1px solid #a7f3d0;text-align:center;padding:12px 16px;font-size:14px}

/* Titres de section */
.fb-sec{padding-block:34px 6px}
.fb-sh{display:flex;align-items:flex-end;justify-content:space-between;gap:12px;margin-bottom:18px;flex-wrap:wrap}
.fb-sh h2{font-size:clamp(20px,2.4vw,26px);font-weight:700;display:flex;align-items:center;gap:10px}
.fb-sh h2 svg{width:28px;height:28px;color:var(--orange);flex:none}
.fb-link{color:var(--orange);font-weight:600;font-size:14px;white-space:nowrap}

/* Grille produits */
.fb-grid{display:grid;grid-template-columns:repeat(6,minmax(0,1fr));gap:14px}
.fb-grid.g4{grid-template-columns:repeat(4,minmax(0,1fr))}
.fb-card{background:#fff;border:1px solid var(--line);border-radius:var(--r);overflow:hidden;display:flex;flex-direction:column;transition:box-shadow .2s,transform .2s;min-width:0}
.fb-card:hover{box-shadow:var(--shadow);transform:translateY(-3px)}
.fb-thumb{position:relative;aspect-ratio:4/5;overflow:hidden;background:var(--orange-soft);display:block}
.fb-thumb img{width:100%;height:100%;object-fit:cover;object-position:top;transition:transform .4s}
.fb-thumb img.contain{object-fit:contain;object-position:center;background:#fff;padding:6px}
.fb-card:hover .fb-thumb img{transform:scale(1.04)}
.fb-thumb .ph{position:absolute;inset:0;display:grid;place-items:center;font-size:44px}
.fb-off{position:absolute;top:10px;left:10px;background:var(--sale);color:#fff;font-weight:700;font-size:12px;padding:3px 8px;border-radius:6px}
.fb-tag{position:absolute;bottom:10px;left:10px;background:var(--orange);color:#fff;font-weight:700;font-size:10.5px;letter-spacing:.5px;text-transform:uppercase;padding:3px 8px;border-radius:6px}
.fb-tag.dark{background:#1f1916}
.fb-info{padding:12px;display:flex;flex-direction:column;gap:6px;flex:1}
.fb-info h3{font-size:13.5px;font-weight:500;line-height:1.35;min-height:2.7em}
.fb-info .cat{font-size:11.5px;color:var(--muted)}
.fb-size{font:inherit;font-size:12px;padding:5px 6px;border:1px solid var(--line);border-radius:8px;background:#fff;color:var(--fg);width:100%}
.fb-buy{display:flex;align-items:flex-end;justify-content:space-between;gap:8px;margin-top:auto}
.fb-price b{display:block;font-size:16px;font-weight:700;color:var(--orange-dark)}
.fb-price b.sale{color:var(--sale)}
.fb-price s{font-size:12px;color:var(--muted)}
.fb-price em{font-style:normal;font-weight:600;color:var(--orange);font-size:13px}
.fb-add{width:40px;height:40px;flex:none;border-radius:11px;background:var(--orange);color:#fff;display:grid;place-items:center;transition:background .2s}
.fb-add:hover{background:var(--orange-dark)}
.fb-add svg{width:20px;height:20px}
.fb-empty{grid-column:1/-1;text-align:center;color:var(--muted);padding:40px 16px;border:1px dashed var(--line);border-radius:var(--r)}

/* Boutons */
.fb-btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;background:var(--orange);color:#fff;font-weight:600;padding:13px 24px;border-radius:999px;box-shadow:0 8px 22px rgba(234,88,12,.3);transition:transform .2s,background .2s}
.fb-btn:hover{transform:translateY(-2px);background:var(--orange-dark)}
.fb-btn.ghost{background:#fff;color:var(--fg);border:1.5px solid var(--line);box-shadow:none}
.fb-btn.wa{background:var(--wa);box-shadow:0 8px 22px rgba(31,168,85,.3)}
.fb-btn svg{width:20px;height:20px}

/* Devis */
.fb-devis{background:var(--orange-soft);border-top:1px solid var(--line);margin-top:48px}
.fb-devis .fb-wrap{display:grid;grid-template-columns:1fr 1.1fr;gap:32px;padding-block:44px;align-items:start}
.fb-devis h2{font-size:clamp(24px,3vw,32px);font-weight:700}
.fb-devis .ey{color:var(--orange-dark);font-weight:600;font-size:12.5px;text-transform:uppercase;letter-spacing:.6px}
.fb-devis ul{list-style:none;padding:0;margin:18px 0 0;display:grid;gap:10px;color:var(--muted)}
.fb-devis li{display:flex;gap:10px;align-items:center}
.fb-devis li::before{content:"✓";width:22px;height:22px;border-radius:50%;background:var(--orange);color:#fff;display:grid;place-items:center;font-size:12px;flex:none}
.fb-form{background:#fff;border:1px solid var(--line);border-radius:20px;padding:22px;display:grid;gap:12px;box-shadow:var(--shadow)}
.fb-form .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.fb-form label{display:grid;gap:4px;font-size:13px;font-weight:500}
.fb-form input,.fb-form textarea{font:inherit;padding:11px 14px;border:1px solid var(--line);border-radius:12px;background:#fff;color:var(--fg);outline:none}
.fb-form input:focus,.fb-form textarea:focus{border-color:var(--orange)}
.fb-form .msg{border-radius:12px;padding:10px 14px;font-size:13.5px}
.fb-form .ok{background:#ecfdf5;color:#065f46}.fb-form .ko{background:#fef2f2;color:#991b1b}

/* Pied de page */
.fb-foot{background:#fff;border-top:1px solid var(--line);padding-block:34px 24px;font-size:14px}
.fb-foot .cols{display:grid;grid-template-columns:1.4fr 1fr 1fr 1.2fr;gap:24px}
.fb-foot h4{font-size:15px;margin:0 0 10px;font-weight:600}
.fb-foot ul{list-style:none;padding:0;margin:0;display:grid;gap:7px;color:var(--muted)}
.fb-foot ul a:hover{color:var(--orange)}
.fb-foot p{color:var(--muted);margin:8px 0}
.fb-copy{display:flex;align-items:center;gap:8px;flex-wrap:wrap}
.fb-copy code{font-family:inherit;font-weight:700;font-size:16px;color:var(--fg);user-select:all}
.fb-copy button{font-size:12px;border:1px solid var(--line);border-radius:999px;padding:3px 10px;color:var(--muted)}
.fb-legal{border-top:1px solid var(--line);margin-top:24px;padding-top:16px;color:var(--muted);font-size:13px;display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap}
.fb-legal span{display:flex;gap:14px;flex-wrap:wrap}

/* WhatsApp flottant */
.fb-wa{position:fixed;right:calc(18px + env(safe-area-inset-right,0px));bottom:calc(18px + env(safe-area-inset-bottom,0px));z-index:40;width:58px;height:58px;border-radius:50%;background:var(--wa);color:#fff;display:grid;place-items:center;box-shadow:0 8px 24px rgba(31,168,85,.45)}
.fb-wa svg{width:30px;height:30px}

/* Panier */
.fb-scrim{position:fixed;inset:0;background:rgba(20,10,5,.45);z-index:70;opacity:0;pointer-events:none;transition:opacity .25s}
.fb-scrim.on{opacity:1;pointer-events:auto}
.fb-drawer{position:fixed;top:0;right:0;bottom:0;z-index:80;width:min(420px,100%);background:#fff;display:flex;flex-direction:column;transform:translateX(100%);transition:transform .3s ease;padding-bottom:env(safe-area-inset-bottom,0px)}
.fb-drawer.on{transform:none}
.fb-dh{display:flex;justify-content:space-between;align-items:center;padding:18px 20px;border-bottom:1px solid var(--line)}
.fb-dh h2{font-size:19px;font-weight:700}
.fb-dh svg{width:24px;height:24px}
.fb-lines{flex:1;overflow-y:auto;padding:12px 20px;display:flex;flex-direction:column;gap:12px}
.fb-line{display:grid;grid-template-columns:62px 1fr auto;gap:12px;align-items:center}
.fb-line .mini{width:62px;height:62px;border-radius:10px;background:var(--orange-soft);overflow:hidden}
.fb-line .mini img{width:100%;height:100%;object-fit:cover;object-position:top}
.fb-line h3{font-size:13.5px;font-weight:600}
.fb-line small{color:var(--muted)}
.fb-qty{display:flex;align-items:center;gap:8px;margin-top:4px}
.fb-qty button{width:26px;height:26px;border-radius:8px;border:1px solid var(--line);font-weight:700}
.fb-rm{color:var(--muted);font-size:12px;text-decoration:underline}
.fb-df{border-top:1px solid var(--line);padding:16px 20px;display:grid;gap:10px}
.fb-total{display:flex;justify-content:space-between;align-items:center;font-size:15px}
.fb-total b{font-size:20px}
.fb-df label{font-size:13px;color:var(--muted);display:grid;gap:4px}
.fb-df input,.fb-df select{font:inherit;padding:10px 12px;border:1px solid var(--line);border-radius:10px;background:#fff;color:var(--fg)}
.fb-order{display:flex;align-items:center;justify-content:center;gap:10px;background:var(--wa);color:#fff;font-weight:600;padding:14px;border-radius:12px}
.fb-order svg{width:22px;height:22px}
.fb-order[aria-disabled="true"]{opacity:.5;pointer-events:none}
.fb-note{font-size:12px;color:var(--muted);text-align:center;margin:0}
.fb-toast{position:fixed;left:50%;bottom:calc(24px + env(safe-area-inset-bottom,0px));transform:translate(-50%,140px);background:var(--fg);color:#fff;padding:12px 20px;border-radius:999px;font-weight:600;font-size:14px;z-index:90;transition:transform .3s;white-space:nowrap}
.fb-toast.on{transform:translate(-50%,0)}

@media (max-width:1100px){.fb-grid{grid-template-columns:repeat(4,minmax(0,1fr))}}
@media (max-width:820px){
  .fb-head{flex-wrap:wrap;gap:12px}.fb-search{order:3;flex-basis:100%}.fb-icons{margin-left:auto}.fb-ib .lbl{display:none}
  .fb-grid,.fb-grid.g4{grid-template-columns:repeat(2,minmax(0,1fr));gap:10px}
  .fb-devis .fb-wrap{grid-template-columns:1fr}.fb-foot .cols{grid-template-columns:1fr 1fr}
}
@media (max-width:480px){.fb-form .row{grid-template-columns:1fr}.fb-foot .cols{grid-template-columns:1fr}.fb-logo b{font-size:20px}}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}}
@stack('styles')
</style>
</head>
<body>
@php($wa = \App\Support\Setting::whatsapp())
@php($phone = \App\Support\Setting::get('phone'))
@php($address = \App\Support\Setting::get('address'))
@php($navCats = \App\Models\Category::withCount(['products' => fn ($q) => $q->where('is_active', true)])->orderByRaw("CASE menu WHEN 'boutique' THEN 0 ELSE 1 END")->orderBy('position')->get())

<div class="fb-top"><div class="fb-wrap">
  <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7h11v9H3zM14 10h4l3 3v3h-7"/><circle cx="7" cy="18" r="1.8"/><circle cx="17" cy="18" r="1.8"/></svg>Livraison à Conakry et dans toute la Guinée</span>
  <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="6" width="18" height="12" rx="2"/><path d="M3 10h18"/></svg>Paiement à la livraison, Orange Money ou MoMo</span>
  @if ($phone)<span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 13a8 8 0 0 1 16 0v4a2 2 0 0 1-2 2h-1v-6h3M4 13v4a2 2 0 0 0 2 2h1v-6H4"/></svg>Service client 7j/7 · {{ $phone }}</span>@endif
  <a class="ml" href="{{ route('track') }}">Suivre ma commande</a>
</div></div>

<header class="fb-header">
  <div class="fb-wrap">
    <div class="fb-head">
      <a class="fb-logo" href="{{ route('home') }}" aria-label="Fabara-boutique.com, accueil"><b>Fabara<i>-boutique</i>.com</b><small>Boutique · Mode, beauté &amp; impression</small></a>
      <form class="fb-search" action="{{ route('search') }}" method="GET" role="search">
        <input type="search" name="q" value="{{ request()->routeIs('search') ? request('q') : '' }}" placeholder="Rechercher une robe, un savon, une casquette…" aria-label="Rechercher un article">
        <button type="submit" aria-label="Rechercher"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></svg></button>
      </form>
      <div class="fb-icons">
        @auth
          <a class="fb-ib" href="{{ auth()->user()->role->home() }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg><span class="lbl">{{ auth()->user()->role === \App\Enums\Role::Client ? 'Mon compte' : 'Mon interface' }}</span></a>
        @else
          <a class="fb-ib" href="{{ route('login') }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg><span class="lbl">Connexion</span></a>
        @endauth
        <button class="fb-ib" type="button" data-open-cart aria-label="Mon panier"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 4h2l2.4 11h10.2L20 7H6.2"/><circle cx="9" cy="19" r="1.6"/><circle cx="17" cy="19" r="1.6"/></svg><span class="lbl">Panier</span><i class="fb-badge fb-num" id="cartCount">0</i></button>
      </div>
    </div>
    <nav class="fb-nav" aria-label="Rayons">
      <a class="all" href="{{ route('home') }}#rayons"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M4 6h16M4 12h16M4 18h16"/></svg>Toutes les catégories</a>
      @foreach ($navCats as $c)
        <a href="{{ route('category', [$c->menu, $c->slug]) }}" @class(['on' => request()->route('category')?->id === $c->id])>{{ $c->name }}</a>
      @endforeach
      <a href="{{ route('promotions') }}" @class(['on' => request()->routeIs('promotions')])>Promotions</a>
    </nav>
  </div>
</header>

@if (session('status'))<div class="fb-flash">✓ {{ session('status') }}</div>@endif
<main>@yield('content')</main>

<section id="devis" class="fb-devis">
  <div class="fb-wrap">
    <div>
      <p class="ey">Impress by Fabara</p>
      <h2>Demandez votre devis d’impression</h2>
      <p style="color:var(--muted);max-width:44ch;margin-top:10px">Cachets, cartes de visite, casquettes brodées, calendriers, éventails, sacs personnalisés… Décrivez votre besoin : nous revenons vers vous avec un prix et un délai.</p>
      <ul>
        <li>Réponse avec prix et délai</li>
        <li>Un code pour suivre votre commande en ligne</li>
        <li>Envoi de votre logo ou visuel par WhatsApp</li>
      </ul>
    </div>
    <form method="POST" action="{{ route('quote.store') }}" class="fb-form">
      @csrf
      @if (session('success'))<p class="msg ok">✓ {{ session('success') }}</p>@endif
      @if ($errors->any() && old('subject') !== null)<p class="msg ko">Merci de remplir votre nom, votre téléphone et votre demande.</p>@endif
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true">
      <div class="row">
        <label for="rn">Votre nom<input name="name" id="rn" value="{{ old('name') }}" required></label>
        <label for="rp">Téléphone<input name="phone" id="rp" value="{{ old('phone') }}" required inputmode="tel"></label>
      </div>
      <label for="rj">Travail ou article souhaité<input name="subject" id="rj" value="{{ old('subject') }}" placeholder="Ex : 100 cartes de visite recto-verso" required></label>
      <label for="rt">Détails (facultatif)<textarea name="details" id="rt" rows="3" placeholder="Couleurs, format, date souhaitée…">{{ old('details') }}</textarea></label>
      <div style="display:flex;gap:10px;flex-wrap:wrap">
        <button class="fb-btn" type="submit">Envoyer ma demande</button>
        @if ($wa)<a class="fb-btn ghost" id="quoteWa" target="_blank" rel="noopener" href="https://wa.me/{{ $wa }}">Ou par WhatsApp</a>@endif
      </div>
    </form>
  </div>
</section>

<footer class="fb-foot"><div class="fb-wrap">
  <div class="cols">
    <div>
      <a class="fb-logo" href="{{ route('home') }}"><b>Fabara<i>-boutique</i>.com</b><small>Boutique · Mode, beauté &amp; impression</small></a>
      <p>Robes de soirée, robes blanches, ensembles, tenues homme, savons et soins de Thaïlande, et impression personnalisée avec Impress.</p>
    </div>
    <div><h4>Boutique</h4><ul>@foreach ($navCats->where('menu', 'boutique') as $c)<li><a href="{{ route('category', ['boutique', $c->slug]) }}">{{ $c->name }}</a></li>@endforeach</ul></div>
    <div><h4>Impress</h4><ul>@foreach ($navCats->where('menu', 'imprimerie') as $c)<li><a href="{{ route('category', ['imprimerie', $c->slug]) }}">{{ $c->name }}</a></li>@endforeach<li><a href="{{ url('/') }}#devis">Demander un devis</a></li></ul></div>
    <div>
      <h4>Contact</h4>
      @if ($address)<p>{{ $address }}</p>@endif
      @if ($phone)<div class="fb-copy"><code id="fbPhone">{{ $phone }}</code><button type="button" id="copyPhone">Copier</button></div>@endif
      <ul style="margin-top:10px">
        <li><a href="https://www.fabara-boutique.com">www.fabara-boutique.com</a></li>
        <li><a href="{{ route('track') }}">Suivre ma commande</a></li>
        @guest<li><a href="{{ route('register') }}">Créer un compte</a></li>@endguest
      </ul>
    </div>
  </div>
  <div class="fb-legal">
    <span>© {{ date('Y') }} Fabara-boutique.com. Tous droits réservés.</span>
    <span><a href="{{ route('privacy') }}">Confidentialité</a><a href="{{ route('terms') }}">Conditions</a><a href="{{ route('deletion') }}">Suppression de compte</a></span>
  </div>
</div></footer>

@if ($wa)
<a class="fb-wa" target="_blank" rel="noopener" href="https://wa.me/{{ $wa }}?text={{ rawurlencode('Bonjour ' . $company . ' Boutique !') }}" aria-label="Écrire sur WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8s-.4-.1-.6.1-.7.8-.8 1-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.2-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.7 11.8 11.8 0 0 0 4.5 4c1.7.7 2.3.8 3.2.6a2.7 2.7 0 0 0 1.8-1.3 2.2 2.2 0 0 0 .1-1.3c0-.1-.2-.2-.4-.3z"/></svg></a>
@endif

<div class="fb-scrim" id="scrim"></div>
<aside class="fb-drawer" id="drawer" aria-label="Panier" aria-hidden="true">
  <div class="fb-dh"><h2>Mon panier</h2><button type="button" id="closeCart" aria-label="Fermer le panier"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6 6 18"/></svg></button></div>
  <div class="fb-lines" id="lines"></div>
  <div class="fb-df">
    <div class="fb-total"><span>Total</span><b class="fb-num" id="total">0</b></div>
    <label for="cName">Votre nom<input id="cName" type="text" placeholder="Ex. Mariama Diallo" value="{{ auth()->user()?->name }}"></label>
    <label for="cZone">Livraison<select id="cZone"><option>Je passe en boutique</option><option>Livraison à Conakry</option><option>Livraison à l'intérieur du pays</option></select></label>
    @if ($wa)
      <a class="fb-order" id="order" target="_blank" rel="noopener" href="#" aria-disabled="true"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2z"/></svg>Commander sur WhatsApp</a>
      <p class="fb-note">Votre commande s’ouvre dans WhatsApp, prête à envoyer{{ $phone ? ' au ' . $phone : '' }}.</p>
    @else
      <p class="fb-note">Ajoutez le numéro WhatsApp dans Admin › Paramètres pour activer la commande.</p>
    @endif
  </div>
</aside>
<div class="fb-toast" id="toast" role="status"></div>

<script>
(() => {
  const WA = @json($wa);
  const CUR = @json(\App\Support\Setting::get('currency') ?: 'GNF');
  const COMPANY = @json($company);
  const fmt = n => Math.round(n).toLocaleString('fr-FR').replace(/ | /g, ' ') + ' ' + CUR;
  const store = {
    get(k, d) { try { return JSON.parse(localStorage.getItem(k)) ?? d } catch (e) { return d } },
    set(k, v) { try { localStorage.setItem(k, JSON.stringify(v)) } catch (e) {} }
  };
  let cart = store.get('fabara_cart', []);
  const $ = id => document.getElementById(id);
  const toast = t => { const el = $('toast'); el.textContent = t; el.classList.add('on'); clearTimeout(toast.t); toast.t = setTimeout(() => el.classList.remove('on'), 2200) };
  const esc = s => String(s).replace(/[&<>"]/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;'}[c]));

  function render() {
    store.set('fabara_cart', cart);
    $('cartCount').textContent = cart.reduce((a, l) => a + l.q, 0);
    $('lines').innerHTML = cart.length ? cart.map((l, i) => `<div class="fb-line"><div class="mini">${l.img ? `<img src="${esc(l.img)}" alt="">` : ''}</div><div><h3>${esc(l.n)}</h3><small class="fb-num">${l.s ? 'Taille ' + esc(l.s) + ' · ' : ''}${l.p ? fmt(l.p) : 'Prix sur devis'}</small><div class="fb-qty"><button type="button" data-dec="${i}" aria-label="Retirer un">−</button><b class="fb-num">${l.q}</b><button type="button" data-inc="${i}" aria-label="Ajouter un">+</button></div></div><button type="button" class="fb-rm" data-rm="${i}">Retirer</button></div>`).join('')
      : '<p class="fb-empty">Votre panier est vide.<br>Ajoutez des articles avec le bouton orange.</p>';
    const tot = cart.reduce((s, l) => s + (l.p || 0) * l.q, 0), ask = cart.some(l => !l.p);
    $('total').textContent = cart.length && ask ? (tot ? fmt(tot) + ' + devis' : 'Sur devis') : fmt(tot);
    const o = $('order'); if (!o) return;
    const name = $('cName').value.trim(), zone = $('cZone').value;
    const msg = `Bonjour ${COMPANY} Boutique, je souhaite commander :\n` + cart.map(l => `• ${l.q} × ${l.n}${l.s ? ' – taille ' + l.s : ''} (${l.p ? fmt(l.p) : 'prix à me communiquer'})`).join('\n')
      + `\n\nTotal : ${ask ? (tot ? fmt(tot) + ' + articles sur devis' : 'à confirmer') : fmt(tot)}\nLivraison : ${zone}` + (name ? `\nNom : ${name}` : '');
    o.href = 'https://wa.me/' + WA + '?text=' + encodeURIComponent(msg);
    o.setAttribute('aria-disabled', cart.length ? 'false' : 'true');
  }
  const open = on => { $('drawer').classList.toggle('on', on); $('scrim').classList.toggle('on', on); $('drawer').setAttribute('aria-hidden', !on) };

  document.addEventListener('click', e => {
    const t = e.target.closest('[data-add],[data-inc],[data-dec],[data-rm],[data-open-cart]'); if (!t) return;
    if ('openCart' in t.dataset) return open(true);
    if (t.dataset.add) {
      e.preventDefault();
      const p = JSON.parse(t.dataset.add);
      const sel = document.getElementById('size-' + p.id + (t.dataset.scope || ''));
      const s = sel ? sel.value : '';
      if (p.sizes && p.sizes.length && !s) { toast('Choisissez d’abord une taille'); sel && sel.focus(); return }
      const qEl = document.getElementById('qty-' + p.id); const q = Math.max(1, parseInt(qEl ? qEl.value : 1) || 1);
      const line = cart.find(l => l.id === p.id && l.s === s);
      line ? line.q += q : cart.push({ id: p.id, n: p.n, p: p.p, img: p.img, s, q });
      render(); toast('Ajouté au panier ✓');
      if (t.dataset.now) { open(true) }
      return;
    }
    const i = +(t.dataset.inc ?? t.dataset.dec ?? t.dataset.rm);
    if (t.dataset.inc) cart[i].q++;
    else if (t.dataset.dec) { if (--cart[i].q <= 0) cart.splice(i, 1) }
    else cart.splice(i, 1);
    render();
  });
  $('closeCart').onclick = () => open(false); $('scrim').onclick = () => open(false);
  $('cName').oninput = render; $('cZone').onchange = render;

  const qw = $('quoteWa');
  if (qw) { const upd = () => { const g = id => ($(id) || {}).value || ''; qw.href = 'https://wa.me/' + WA + '?text=' + encodeURIComponent('Bonjour, je suis ' + g('rn') + '. Je souhaite : ' + g('rj') + '. ' + g('rt')) }; ['rn','rj','rt'].forEach(id => $(id).addEventListener('input', upd)); upd() }
  const cp = $('copyPhone');
  if (cp) cp.onclick = () => { const el = $('fbPhone'); (navigator.clipboard ? navigator.clipboard.writeText(el.textContent.trim()) : Promise.reject()).then(() => toast('Numéro copié')).catch(() => getSelection().selectAllChildren(el)) };
  render();
})();
</script>
@stack('scripts')
</body>
</html>
