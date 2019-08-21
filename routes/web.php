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

// Route::get('/selectroommates', function () {
//     return view('selectroommates');
// });


Route::get('/searchroommates', function () {
    return view('searchroommates');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/searchroommates', 'SearchController@search')->middleware('auth');

Route::post('/selectroommates/{user}', 'HomeController@update_utr')->middleware('auth')->name('update_utr');
Route::post('/home/{user}', 'HomeController@update_book_room')->middleware('auth')->name('update_book_room');

Route::get('/verifyresults', 'AdminController@verify_results')->   
    middleware('is_admin')    
    ->name('admin');
Route::get('/verifyfees', 'AdminController@verify_fees')->   
    middleware('is_admin')    
    ;
Route::patch('/verifyresults/{user}', 'AdminController@update_result_status')->   
    middleware('is_admin')    
    ;
    Route::patch('/verifyfees/{user}', 'AdminController@update_fee_status')->   
    middleware('is_admin')    
    ;
    