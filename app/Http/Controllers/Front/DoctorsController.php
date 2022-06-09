<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorDetail;
use App\Models\Specialty;
use App\Models\Country;
use App\Models\Hospital;
use App\Models\DoctorReview;
use DB;

class DoctorsController extends Controller
{
    public function index(){

    }
    //search doctors
    public function search(Request $request){
         try {
            //$country=explode('-',$request->location);
            $city=$request->location;
            $country=$city;
            $speciality=explode('-',$request->speciality);
            $serach_doctors = DoctorDetail::with('country','sepcial','drating')->when($request->name, function ($query) use ($request) {
                    return $query->where('full_name', 'LIKE', "%{$request->name}%");
                })
                ->when($request->location, function ($query) use ($request, $city) {
                        
                       // return $query->where('city_id', '=', $country[1]);
                    return $query->where('city', 'LIKE', "%{$city}%");
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
                $cities = json_decode(file_get_contents(storage_path() . "/city.json"), true);
                        return view('frontend.doctor.search-result',compact('serach_doctors','country','speciality','specialities','countries','hospitals','cities'));
             } catch (\Exception $exception) {
                toastr()->error('Something went wrong, try again');
                 return back();
             }
        return view('frontend.doctor.search-result');
    }

    //top rated doctors
    public function top_doctors()
    {
        $topdoctors = DoctorDetail::with('country')
                 ->select(['doctor_details.*',DB::raw('avg(doctor_reviews.overall_rating) as avgrate')])
                ->join('doctor_reviews', 'doctor_reviews.doctor_detail_id', '=', 'doctor_details.id')
                ->groupBy('doctor_reviews.doctor_detail_id')
                ->orderBy('avgrate', 'Desc')
                ->limit(10)
                ->get();
        dd($topdoctors);
    }

    //feedback
    public function doctor_feedback($id)
    {
       $doctorid= \Crypt::decrypt($id);
       $doctors_feedback = DoctorDetail::with('country','sepcial','drating')->with('drating.user')->find($doctorid);
       return view('frontend.doctor.doctor-feed-back',compact('doctors_feedback')); 
    }
    //save feedback
    public function patient_feedback_save(Request $request)
    {
         try {
             $all_inputs  = $request->except('_token');
             $sum=0;
             $no=0;
             if(isset($request->bedside_manner_rating))
             {
                $sum +=$request->bedside_manner_rating;
                $no++;
             }
             if(isset($request->knowledge_rating))
             {
                $sum +=$request->knowledge_rating;
                $no++;
             }
             if(isset($request->punctuality_rating))
             {
                $sum +=$request->punctuality_rating;
                $no++;
             }
             if(isset($request->scheduling_rating))
             {
                $sum +=$request->scheduling_rating;
                $no++;
             }
             if(isset($request->treatment_rating))
             {
                $sum +=$request->treatment_rating;
                $no++;
             }
             $all_inputs['overall_rating']=$sum/$no;
             DoctorReview::create($all_inputs);
             toastr()->success('Thank you for valuable feedback!');
             return back();
             
         } 
         catch (\Exception $exception) 
         {
            toastr()->error('Something went wrong, try again');
             return back();
         }
    }
    
}
