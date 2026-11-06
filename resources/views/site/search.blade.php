@extends('site.layout')
@section('title', 'Recherche — Fabara')
@section('content')
@if ($term !== '')
  @include('site._listing', ['title' => 'Résultats pour « ' . $term . ' »', 'count' => $products->count(), 'products' => $products, 'empty' => 'Aucun résultat'])
@else
  <div class="fb-wrap" style="padding-block:40px">
    <h1 style="font-size:28px;font-weight:700">Rechercher</h1>
    <p style="color:var(--muted)">Tapez au moins 2 lettres dans la barre de recherche : robe, savon, casquette…</p>
  </div>
@endif
@endsection
