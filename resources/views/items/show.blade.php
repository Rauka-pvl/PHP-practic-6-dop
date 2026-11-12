@extends('layout')
@section('content')
<article class="api-panel"><h2>{{ $item->title }}</h2><p>ID {{ $item->id }}</p><p>Категория: {{ $item->category }}</p><p>Количество: {{ $item->quantity }}</p><p>Цена в минимальных единицах: {{ $item->price_minor }}</p></article>
@endsection
