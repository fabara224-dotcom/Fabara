@extends('site.layout')
@section('title', e($product->name) . ' — Fabara')
@section('description', e(\Illuminate\Support\Str::limit(strip_tags((string) $product->description) ?: $product->name . ' chez Fabara Boutique.', 150)))
@php($menu = $product->category->menu)
@php($wa = \App\Support\Setting::whatsapp())
@php($out = $product->stock !== null && $product->stock <= 0)
@php($contain = $menu === 'imprimerie' || $product->category->slug === 'beaute-soins')
@php($sizes = $product->sizeList())
@php($data = ['id' => $product->id, 'n' => $product->name, 'p' => $product->price ? (float) $product->price : null, 'img' => $product->image_url, 'sizes' => $sizes])
@push('styles')
.fb-crumb{padding-top:18px;font-size:13px;color:var(--muted)}
.fb-crumb a:hover{color:var(--orange)}
.fb-pp{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:40px;margin-top:16px;align-items:start}
.fb-pimg{border-radius:20px;overflow:hidden;border:1px solid var(--line);background:var(--orange-soft);position:relative;aspect-ratio:4/5}
.fb-pimg img{width:100%;height:100%;object-fit:cover;object-position:top}
.fb-pimg img.contain{object-fit:contain;background:#fff;padding:12px}
.fb-pinfo{position:sticky;top:150px}
.fb-pinfo .cat{display:inline-block;font-size:12px;font-weight:600;padding:4px 12px;border-radius:999px;background:var(--orange-soft);color:var(--orange-dark)}
.fb-pinfo h1{font-size:clamp(24px,3vw,32px);font-weight:700;margin-top:12px}
.fb-pprice{display:flex;align-items:baseline;gap:12px;flex-wrap:wrap;margin-top:14px}
.fb-pprice b{font-size:30px;font-weight:700;color:var(--orange-dark)}
.fb-pprice b.sale{color:var(--sale)}
.fb-pprice s{color:var(--muted);font-size:16px}
.fb-pprice .off{background:var(--sale);color:#fff;font-weight:700;font-size:13px;padding:3px 9px;border-radius:6px}
.fb-stock{display:inline-flex;align-items:center;gap:8px;font-weight:500;margin-top:10px}
.fb-stock i{width:10px;height:10px;border-radius:50%;display:inline-block}
.fb-vars{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px}
.fb-vars a{width:64px;border:2px solid var(--line);border-radius:12px;overflow:hidden;font-size:11px;text-align:center}
.fb-vars a img{width:100%;aspect-ratio:1;object-fit:cover;object-position:top}
.fb-vars a.on{border-color:var(--orange)}
.fb-vars a span{display:block;padding:3px 2px;line-height:1.2}
.fb-opts{display:grid;grid-template-columns:1fr 110px;gap:10px;margin-top:20px}
.fb-opts label{display:grid;gap:4px;font-size:13px;font-weight:500}
.fb-opts select,.fb-opts input{font:inherit;padding:11px 12px;border:1px solid var(--line);border-radius:12px;background:#fff;color:var(--fg)}
.fb-pbtns{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px}
.fb-pdesc{margin-top:22px;color:#3f3531;white-space:pre-line;line-height:1.7}
.fb-assure{list-style:none;padding:18px 0 0;margin:22px 0 0;border-top:1px solid var(--line);display:grid;gap:8px;color:var(--muted);font-size:13.5px}
@media (max-width:820px){.fb-pp{grid-template-columns:1fr;gap:20px}.fb-pinfo{position:static}}
@endpush
@section('content')
<div class="fb-wrap">
  <p class="fb-crumb"><a href="{{ route('home') }}">Accueil</a> › <a href="{{ route('category', [$menu, $product->category->slug]) }}">{{ $product->category->name }}</a> › <span>{{ $product->name }}</span></p>

  <div class="fb-pp">
    <div class="fb-pimg">
      @if ($product->image_url)
        <img @class(['contain' => $contain]) src="{{ $product->image_url }}" alt="{{ $product->name }}" style="{{ $out ? 'opacity:.5;filter:grayscale(1)' : '' }}">
      @else
        <span style="position:absolute;inset:0;display:grid;place-items:center;font-size:80px">{{ $product->category->icon() }}</span>
      @endif
    </div>

    <div class="fb-pinfo">
      <a class="cat" href="{{ route('category', [$menu, $product->category->slug]) }}">{{ $product->category->name }}</a>
      <h1>{{ $product->name }}</h1>
      <div class="fb-pprice fb-num">
        @if ($product->price)
          <b @class(['sale' => $product->onSale()])>{{ \App\Support\Money::fmt($product->price) }}</b>
          @if ($product->onSale())<s>{{ \App\Support\Money::fmt($product->old_price) }}</s><span class="off">-{{ $product->discount() }}%</span>@endif
        @else
          <b>Prix sur devis</b>
        @endif
      </div>
      @if ($menu === 'boutique')
        <p class="fb-stock" style="color:{{ $out ? 'var(--muted)' : ($product->isLow() ? '#b45309' : '#15803d') }}">
          <i style="background:currentColor"></i>{{ $out ? 'Épuisé pour le moment' : ($product->isLow() ? 'Dernières pièces disponibles' : 'En stock') }}
        </p>
      @endif

      @if ($variants->count() > 1)
        <div class="fb-vars" aria-label="Autres couleurs">
          @foreach ($variants as $v)
            <a href="{{ route('product', $v) }}" @class(['on' => $v->id === $product->id]) title="{{ $v->name }}">
              @if ($v->image_url)<img src="{{ $v->image_url }}" alt="">@endif
              <span>{{ \Illuminate\Support\Str::after($v->name, ' – ') }}</span>
            </a>
          @endforeach
        </div>
      @endif

      @unless ($out)
        <div class="fb-opts" @if (! $sizes) style="grid-template-columns:110px" @endif>
          @if ($sizes)
            <label for="size-{{ $product->id }}">Taille
              <select id="size-{{ $product->id }}"><option value="">Choisir la taille</option>@foreach ($sizes as $s)<option>{{ $s }}</option>@endforeach</select>
            </label>
          @endif
          <label for="qty-{{ $product->id }}">Quantité<input id="qty-{{ $product->id }}" type="number" min="1" value="1" inputmode="numeric"></label>
        </div>
        <div class="fb-pbtns">
          <button type="button" class="fb-btn" data-add="{{ json_encode($data) }}">Ajouter au panier</button>
          <button type="button" class="fb-btn wa" data-add="{{ json_encode($data) }}" data-now="1">Commander sur WhatsApp</button>
        </div>
      @endunless

      @if ($product->description)<p class="fb-pdesc">{{ $product->description }}</p>@endif
      <ul class="fb-assure">
        <li>✓ Prix confirmé à la commande</li>
        <li>✓ {{ $menu === 'imprimerie' ? 'Suivi de votre commande en ligne avec un code' : 'Retrait en boutique ou livraison à Conakry et en Guinée' }}</li>
        <li>✓ Paiement à la livraison, Orange Money ou MoMo</li>
      </ul>
    </div>
  </div>

  @if ($related->count())
    <section class="fb-sec">
      <div class="fb-sh"><h2>Vous aimerez aussi</h2><a class="fb-link" href="{{ route('category', [$menu, $product->category->slug]) }}">Tout voir →</a></div>
      <div class="fb-grid">@foreach ($related as $p) @include('site._card', ['p' => $p, 'scope' => '-rel']) @endforeach</div>
    </section>
  @endif
</div>
@endsection
