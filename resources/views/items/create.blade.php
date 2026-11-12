@extends('layout')
@section('content')
<section class="api-panel"><h2>Новая запись</h2>
@if($errors->any())<p role="alert">Исправьте отмеченные поля.</p>@endif
<form method="post" action="{{ route('items.store') }}">
@csrf
<label>Заголовок<input name="title" value="{{ old('title') }}" aria-describedby="title-error"></label>
@error('title')<p id="title-error" role="alert">{{ $message }}</p>@enderror
<label>Категория<select name="category" aria-describedby="category-error">@foreach($categories as $category)<option @selected(old('category')===$category)>{{ $category }}</option>@endforeach</select></label>
@error('category')<p id="category-error" role="alert">{{ $message }}</p>@enderror
<label>Количество<input name="quantity" type="number" value="{{ old('quantity') }}" aria-describedby="quantity-error"></label>
@error('quantity')<p id="quantity-error" role="alert">{{ $message }}</p>@enderror
<label>Цена в минимальных единицах<input name="price_minor" type="number" value="{{ old('price_minor') }}" aria-describedby="price-error"></label>
@error('price_minor')<p id="price-error" role="alert">{{ $message }}</p>@enderror
<button>Сохранить</button>
</form></section>
@endsection
