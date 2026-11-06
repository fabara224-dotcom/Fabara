@extends('site.layout')
@section('title', 'Promotions — Fabara')
@section('content')
@include('site._listing', ['title' => 'Promotions', 'count' => $products->count(), 'products' => $products])
@endsection
