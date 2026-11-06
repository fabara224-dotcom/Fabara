{{-- Carte article : $p (Product), $scope (facultatif, si le même article apparaît deux fois sur la page) --}}
@php($scope = $scope ?? '')
@php($out = $p->stock !== null && $p->stock <= 0)
@php($contain = $p->category?->menu === 'imprimerie' || $p->category?->slug === 'beaute-soins')
@php($sizes = $p->sizeList())
@php($data = ['id' => $p->id, 'n' => $p->name, 'p' => $p->price ? (float) $p->price : null, 'img' => $p->image_url, 'sizes' => $sizes])
<article class="fb-card">
  <a class="fb-thumb" href="{{ route('product', $p) }}">
    @if ($p->image_url)
      <img @class(['contain' => $contain]) src="{{ $p->image_url }}" alt="{{ $p->name }}" loading="lazy" style="{{ $out ? 'opacity:.5;filter:grayscale(1)' : '' }}">
    @else
      <span class="ph">{{ $p->category?->icon() }}</span>
    @endif
    @if ($p->onSale())<span class="fb-off">-{{ $p->discount() }}%</span>@endif
    @if ($out)<span class="fb-tag dark">Épuisé</span>
    @elseif ($p->created_at && $p->created_at->gt(now()->subDays(30)))<span class="fb-tag">Nouveau</span>@endif
  </a>
  <div class="fb-info">
    <a href="{{ route('product', $p) }}"><h3>{{ $p->name }}</h3></a>
    @if ($sizes && ! $out)
      <select class="fb-size" id="size-{{ $p->id }}{{ $scope }}" aria-label="Taille">
        <option value="">Choisir la taille</option>
        @foreach ($sizes as $s)<option>{{ $s }}</option>@endforeach
      </select>
    @endif
    <div class="fb-buy">
      <div class="fb-price fb-num">
        @if ($p->price)
          <b @class(['sale' => $p->onSale()])>{{ \App\Support\Money::fmt($p->price) }}</b>
          @if ($p->onSale())<s>{{ \App\Support\Money::fmt($p->old_price) }}</s>@endif
        @else
          <em>Prix sur devis</em>
        @endif
      </div>
      @unless ($out)
        <button type="button" class="fb-add" data-add="{{ json_encode($data) }}" data-scope="{{ $scope }}" aria-label="Ajouter {{ $p->name }} au panier"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 4h2l2.4 11h10.2L20 7H6.2"/><path d="M13 9v4M11 11h4"/></svg></button>
      @endunless
    </div>
  </div>
</article>
