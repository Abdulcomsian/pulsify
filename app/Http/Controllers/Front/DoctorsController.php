<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorDetail;
use App\Models\Specialty;
use App\Models\Country;
use App\Models\Hospital;

class DoctorsController extends Controller
{
    public function index(){

    }
    //search doctors
    public function search(Request $request){
         try {
            $country=explode('-',$request->location);
            $speciality=explode('-',$request->speciality);
            $serach_doctors = DoctorDetail::with('country','sepcial','drating')->when($request->name, function ($query) use ($request) {
                    return $query->where('full_name', 'LIKE', "%{$request->name}%");
                })
                ->when($request->location, function ($query) use ($request, $country) {
                        
                        return $query->where('country_id', '=', $country[1]);
                })
                ->when($request->speciality, function ($query) use ($request,$speciality) {
                       
                        return $query->where('specialtie_id', '=', $speciality[1]);
                })
                ->when($request->hospital, function ($query) use ($request) {
                        return $query->where('hospital_id', '=', $request->hospital);
                })
                ->when($request->gender, function ($query) use ($request) {
                        if($request->gender!="all")
                        {
                             return $query->where('gender', '=',$request->gender);
                        }
                })
                ->get();
                //query for getting records
                $doctors   =DoctorDetail::with('country','sepcial')->get();
                $specialities=Specialty::where('is_featured',1)->limit(5)->get();
                $countries =Country::get();
                $hospitals =Hospital::get();
                        return view('frontend.doctor.search-result',compact('serach_doctors','country','speciality','specialities','countries','hospitals'));
             } catch (\Exception $exception) {
                toastr()->error('Something went wrong, try again');
                 return back();
             }
        return view('frontend.doctor.search-result');
    }
}
