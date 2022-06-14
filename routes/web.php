<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\DoctorsController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\BlogController;
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







Route::get('/hospital-feedback', function () {
  return view('frontend.doctor.hospital-feed-back');
});
//search doctors
Route::get('/search', [DoctorsController::class, 'search'])->name('search.doctors');
Route::get('Top-Rated-Doctos',[DoctorsController::class, 'top_doctors'])->name('top.doctors');
Route::get('Top-Rated-Hospitals',[DoctorsController::class, 'top_hospitals'])->name('top.hospitals');
Route::get('/doctor-feedback/{id}', [DoctorsController::class, 'doctor_feedback'])->name('doctors.feedback');

//contact us rutes
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('contact-save', [ContactUsController::class, 'store'])->name('contact-us.store');
Route::get('/', [HomeController::class, 'home'])->name('home');

//AUTH MIDDLEWARE
Route::group(['middleware' => ['auth']], function () {
 Route::post('/patient-feedback-save',[DoctorsController::class, 'patient_feedback_save'])->name('patient.feedback-save');
});



//Admin Routes here

Route::group(['middleware' => ['auth', 'admin'],'prefix' => 'admin'], function () {
  Route::get('dashboard', [DoctorController::class, 'dashboard'])->name('admin.dashboard');
  Route::post('store_education', [DoctorController::class, 'store_education'])->name('doctor_detail.store-education');
  Route::post('store_experience', [DoctorController::class, 'store_experience'])->name('doctor_detail.store-experience');
  Route::get('delete_education/{id}', [DoctorController::class, 'delete_education'])->name('doctor_detail.delete-education');
  Route::get('delete_experience/{id}', [DoctorController::class, 'delete_experience'])->name('doctor_detail.delete-experience');
  Route::post('store_service', [DoctorController::class, 'store_service'])->name('doctor_detail.store-service');

  Route::resources([
    'doctors' => DoctorController::class,
    'spiciality' => SpecialtyController::class, //Specialty
    'hospitals' => HospitalController::class, //hospitals
    'blogs' => BlogController::class,//blogs
  ]);
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
