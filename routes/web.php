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
Route::get('home', function () {
   return view('page');
});
Route::get('page1', function () {
   return view('page1');
});
Route::get('page2', function () {
   return view('page2');
});
Route::get('login', function () {
   return view('login');
});
///***///redirect
Route::get('/test', ['as'=>'testing',function(){
   return view('test');
}]);
Route::get('redirect',function(){
   return redirect()->route('testing');
});
///***///redirect passing controller
Route::get('rr','RedirectController@test_redirectC');
Route::get('/redirectcontroller','RedirectController@test_redirectC');
///***/// insert form 1 SQL
Route::get('/insert','StudInsertController@insertform');
Route::post('/create','StudInsertController@insert');
///***/// insert form 2 SQL
Route::post('/create2','StudInsertController@insert2');
///***/// select db
Route::get('view-records','StudViewController@index');
///***/// update db
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete/{id}','StudUpdateController@del');