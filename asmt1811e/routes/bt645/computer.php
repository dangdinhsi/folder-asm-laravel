<?php
Route::get('/product/view',function (){
   return view('BT645/add');
})->name('bt645-form');
Route::post('/product/view','BT645ProductController@addProduct')->name('bt645-add-product');
