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
 Route::get('about',function(){
	return 'Hi khalil khademi jan';
 });
 Route::get('khalil',function(){
 	return view('welcome');
 });



 Route::get('/',function(){


	$people = ['khalil','azim','khademi','Hurmat ','murtaza'];
	return view('welcome',compact('people'));

});
Route::get('khan','pagesController@khalil');
Route::get('khalil','khalilController@khademi');

Route::get('/abouts' , function(){
	return view('/abouts');
});

Route::get('/lyouts' , function(){
	return view('/lyouts');
});
Route::get('home',function(){
	return view('home');
});

Route::get('home1','homeController@th');