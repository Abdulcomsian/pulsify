<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorDetail;
use App\Models\DoctorReview;
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
        $reviews   =DoctorReview::latest()->limit(6)->get();
        $speciality=Specialty::where('is_featured',1)->limit(5)->get();
        $countries =Country::get();
        $hospitals =Hospital::get();
        $blogs     =Blog::limit(5)->latest()->get();
        $cities = json_decode(file_get_contents(storage_path() . "/city.json"), true);
        $tophospital = Hospital::with('country','h_rating')
            ->select(['hospitals.*',DB::raw('avg(hospital_ratings.overall_rating) as avgrate'),DB::raw('count(hospital_ratings.id) as count_rating')])
            ->join('hospital_ratings', 'hospital_ratings.hospital_id', '=', 'hospitals.id')
            ->groupBy('hospital_ratings.hospital_id')
            ->first();
        // dd($tophospital);
        return view('frontend.home',compact('tophospital','doctors','speciality','countries','hospitals','blogs','cities','reviews'));
    }
}
