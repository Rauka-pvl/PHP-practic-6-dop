@extends('layout')
@section('content')
<h2>Ресурсы</h2>
@forelse($items as $item)
<article class="api-panel"><h3>{{ $item->title }}</h3><p>{{ $item->category }} · количество {{ $item->quantity }} · цена {{ $item->price_minor }}</p><a href="{{ route('items.show',$item) }}">Открыть запись</a></article>
@empty
<p>Записи не найдены.</p>
@endforelse
@endsection
