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

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('hello',['as'=>'hello',function(){

    return "123";
}]);
Route:get('hello/profile',['as'=>'profile',function(){
// $url=route('profile');

//     return $url;
    $redirect=redirect()->route('helloe');
    return $redirect;
}]);
Route::get('user','userController@index');
Route::get('age',['middleware'=>'age',function(){
    return "111111";
}]);*/


Route::get('book/index','bookController@index');
Route::get('book/create','bookController@create');
Route::post('book/store','bookController@store');
Route::get('book/edit/update/{id}','bookController@update');
Route::get('book/{id}','bookController@show');
Route::get('book/delete/{id}','bookController@destroy');

Route::get('book/edit/{id}','bookController@edit');
//Route::resource('/book','bookController');




Route::get('articles','ArticleController@index');
Route::get('articles/create','ArticleController@create');
Route::get('articles/store','ArticleController@store');
Route::get('articles/{id}','ArticleController@show');


Route::get('test','TestController@index');