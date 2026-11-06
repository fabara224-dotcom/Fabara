@extends('site.layout')
@section('title', e($category->name) . ' — Fabara')
@section('content')
@include('site._listing', [
    'title' => $category->name,
    'count' => $products->count(),
    'products' => $products,
    'sort' => true,
    'chips' => $siblings->where('products_count', '>', 0)->map(fn ($s) => [$s->name, route('category', [$menu, $s->slug]), $s->id === $category->id])->values()->all(),
])
@endsection
