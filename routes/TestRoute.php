<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
//use app\Http\Controllers\Test\Admin;


Route::get('admin','Test\Admin@test');

Route::group(['namespace'=>'Test'],function (){
    Route::group(['prefix'=>'test'],function (){
        Route::get('ab',[\App\Http\Controllers\Test\TestController::class , 'index']);
    });
});
