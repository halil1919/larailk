<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"admin","as"=>"admin","namespace"=>"admin"],function(){

        Route::get('/','homePageControllers@show')->name('.adminanasayfa');

        Route::group(['prefix'=>"slider","as"=>".slider"],function(){
            Route::get('/','sliderPageControllers@show')->name('.slideranasayfa');
            Route::get('/slider-ekle','sliderPageControllers@sliderEklemeForm')->name('.sliderekle');
            Route::post('/slider-ekle','sliderPageControllers@sliderEkledata')->name('.sliderekledata');

            Route::get('/slider-duzenle/{id}','sliderPageControllers@sliderupdateform')->name('.sliderdznformu');

        });

});
