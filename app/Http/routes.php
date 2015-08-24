<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function(){
    return 'world';
});


Route::get('/hello/{name}', function($name){
   return 'hello,' . $name;
});


//和第一条路由冲突
Route::get('/hello/{name?}', function($name = 'word'){
   return 'hello,' . $name; 
});


//正则路由
Route::get('/news/{id?}', function($id = 0){
    return 'newsid:' . $id;
})->where(['id' => '\d+']);