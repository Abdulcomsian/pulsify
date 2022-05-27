<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\HospitalController;
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




Route::get('/contact-us', function () {
  return view('frontend.contact-us');
});


  Route::get('/', [HomeController::class, 'home'])->name('home');






//Admin Routes here

Route::group(['middleware' => ['auth', 'admin'],'prefix' => 'admin'], function () {
  Route::get('dashboard', function () {
    return view('backend.dashboard');
  });

  Route::resources([
    'doctors' => DoctorController::class,
    'spiciality' => SpecialtyController::class, //Specialty
    'hospitals' => HospitalController::class, //hospitals
  ]);
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
