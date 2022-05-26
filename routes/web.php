<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.home');
});
Route::get('/signin', function () {
  return view('frontend.auth.login');
});
Route::get('/signup', function () {
  return view('frontend.auth.register');
});
Route::get('/contact-us', function () {
  return view('frontend.contact-us');
});




//Admin Routes here

Route::group(['prefix'=>'admin'], function(){
  Route::get('dashboard',function(){
    return view('backend.dashboard');
    });
  Route::get('doctors',function(){
    return view('backend.index');
    });
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
