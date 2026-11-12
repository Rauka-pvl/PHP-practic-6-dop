<?php
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
Route::get('/',fn()=>redirect()->route('items.index'));
Route::get('/items',[ItemController::class,'index'])->name('items.index');
Route::get('/items/new',[ItemController::class,'create'])->name('items.create');
Route::get('/items/{item}',[ItemController::class,'show'])->whereNumber('item')->name('items.show');
Route::post('/items',[ItemController::class,'store'])->name('items.store');
