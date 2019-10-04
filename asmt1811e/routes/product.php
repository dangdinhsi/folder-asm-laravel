<?php

Route::group(['prefix' => '/bt647/product'], function () {
    Route::get('/view', 'BT647ProductController@showAll')->name('BT647showAll');
});
