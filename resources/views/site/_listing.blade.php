{{-- En-tête de liste + grille : $title, $count, $products, $chips (liste [label, url, actif]), $sort (bool) --}}
@push('styles')
.fb-crumb{padding-top:18px;font-size:13px;color:var(--muted)}
.fb-crumb a:hover{color:var(--orange)}
.fb-lh{margin-top:12px;background:linear-gradient(90deg,var(--orange-soft),#fff);border:1px solid var(--line);border-radius:18px;padding:22px 24px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap}
.fb-lh h1{font-size:clamp(24px,3vw,32px);font-weight:700}
.fb-lh p{color:var(--muted);margin:4px 0 0}
.fb-chips{display:flex;gap:8px;overflow-x:auto;scrollbar-width:none;padding-block:16px 4px}
.fb-chips a{white-space:nowrap;border:1px solid var(--line);border-radius:999px;padding:7px 14px;font-size:13px;font-weight:500}
.fb-chips a:hover{border-color:var(--orange)}
.fb-chips a.on{background:var(--orange);border-color:var(--orange);color:#fff}
.fb-tools{display:flex;gap:8px;flex-wrap:wrap}
.fb-tools input,.fb-tools select{font:inherit;padding:10px 14px;border:1px solid var(--line);border-radius:12px;background:#fff;color:var(--fg);outline:none}
.fb-tools input{min-width:0;flex:1}
.fb-tools input:focus,.fb-tools select:focus{border-color:var(--orange)}
@endpush
<div class="fb-wrap">
  <p class="fb-crumb"><a href="{{ route('home') }}">Accueil</a> › <span>{{ $title }}</span></p>
  <div class="fb-lh">
    <div>
      <h1>{{ $title }}</h1>
      <p>{{ $count }} article{{ $count > 1 ? 's' : '' }}</p>
    </div>
    @if ($sort ?? false)
      <form method="GET" class="fb-tools">
        <input type="search" name="q" value="{{ request('q') }}" placeholder="Rechercher dans {{ $title }}…" aria-label="Rechercher dans {{ $title }}">
        <select name="tri" onchange="this.form.submit()" aria-label="Trier">
          <option value="">Plus récents</option>
          <option value="prix_asc" @selected(request('tri') === 'prix_asc')>Prix croissant</option>
          <option value="prix_desc" @selected(request('tri') === 'prix_desc')>Prix décroissant</option>
        </select>
      </form>
    @endif
  </div>
  @if (! empty($chips))
    <nav class="fb-chips" aria-label="Autres rayons">@foreach ($chips as [$label, $url, $on])<a href="{{ $url }}" @class(['on' => $on])>{{ $label }}</a>@endforeach</nav>
  @endif
  <div class="fb-grid" style="margin-top:16px">
    @forelse ($products as $p)
      @include('site._card', ['p' => $p])
    @empty
      <div class="fb-empty">
        <p style="font-weight:600;color:var(--fg)">{{ $empty ?? 'Aucun article pour le moment' }}</p>
        <p>Écrivez-nous : nous l’avons peut-être en boutique.</p>
        <a class="fb-btn" style="margin-top:10px" href="#devis">Nous contacter</a>
      </div>
    @endforelse
  </div>
</div>
