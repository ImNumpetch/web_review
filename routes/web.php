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
    return view('homePage ');
    
});
Route::get('/novelPage', function()
{
    $content = DB::table('reviews')->get();
    return view('novelPage',['content'=>$content]);
});


Route::get('/editReview', function()
{
    return view('editReviewPage');
});

Route::post('/editReviewPage','reviewPageController@store')->name('editReviewPage.store');


Route::get('homePage/all','homeControl@show_all')->name('home_show_all');
route::resource('homePage','homeControl');
route::resource('editReviewPage','reviewPageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
