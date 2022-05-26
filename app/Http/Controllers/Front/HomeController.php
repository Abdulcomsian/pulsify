<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorDetail;
use App\Models\Specialty;
use App\Models\Country;

class HomeController extends Controller
{
    public function home()
    {
        $doctors   =DoctorDetail::with('country','sepcial')->get();
        $speciality=Specialty::limit(5)->get();
        $countries =Country::get();
        return view('frontend.home',compact('doctors','speciality','countries'));
    }
}
