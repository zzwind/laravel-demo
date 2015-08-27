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

//基础路由
Route::get('/hello', function(){
    return 'world';
});

//命名路由 路由到控制器
Route::get('hello1', ['as' => 'hellocontroll', 'uses' => 'HelloController@sayHelloWorld']);

//路由参数
Route::get('/hello/{name}', function($name){
   return 'hello,' . $name;
});


//参数可控，第一条路由冲突，运行时需要注释基础路由
Route::get('/hello/{name?}', function($name = 'word'){
   return 'hello,' . $name; 
});


//正则路由
Route::get('/news/{id?}', function($id = 0){
    return 'newsid:' . $id;
})->where(['id' => '\d+']);

//路由组
Route::group(['prefix' => 'news',], function(){
    
   Route::get('add', function(){
      return 'in news/add'; 
   });
   
   Route::get('edit', function(){
      return 'in news/edit'; 
   });
   
});


Route::get('/age',['middleware' => 'age', function ()
    {
        return 'in age';
    }]);
    


//测试验证
Route::get('post', 'PostController@store');    
    
