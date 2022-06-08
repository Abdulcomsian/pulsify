<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorDetail;
use App\Models\Specialty;
use App\Models\Country;
use App\Models\Hospital;
use App\Models\Blog;
use DB;

class HomeController extends Controller
{
    public function home()
    {
        $doctors   =DoctorDetail::with('country','sepcial','drating')->get();
        $speciality=Specialty::where('is_featured',1)->limit(5)->get();
        $countries =Country::get();
        $hospitals =Hospital::get();
        $blogs     =Blog::limit(5)->latest()->get();
         $cities = json_decode(file_get_contents(storage_path() . "/city.json"), true);
        return view('frontend.home',compact('doctors','speciality','countries','hospitals','blogs','cities'));
    }
}
