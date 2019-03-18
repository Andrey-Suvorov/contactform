<?php
    // MyVendor\contactform\src\routes\web.php
    Route::group(['namespace' => 'Hantu\contactform\Http\controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });