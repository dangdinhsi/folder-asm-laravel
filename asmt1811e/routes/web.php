<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//BT642
Route::prefix('/bt642')->group(function (){
    Route::get('/danh-sach-san-pham',function (){
        return view('BT642/list');
    })->name('bt642-p1');
    Route::get('/danh-sach-san-pham-method-2','BT642Controller@listProduct')->name('bt642-p2');
    Route::get('/add',function (){
       return view('BT642/form');
    })->name('input-product');
    Route::post('/add','BT642Controller@addProduct')->name('add-product');
});

//BT641.
Route::prefix('/bt641')->group(function (){
    Route::get('/list','StudentController@listStudent')->name('list-student');

    Route::get('/add',function (){
        return view('BT641/form');
    })->name('input-student');
    Route::post('/add','StudentController@postStudent')->name('post-student');

    Route::post('/delete','StudentController@deleteStudent')->name('delete-student');
});


