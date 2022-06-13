<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Specialty;
use App\Models\DoctorDetail;
use App\Models\DoctorReview;
use App\Models\HospitalRating;
use App\Models\Hospital;
use App\Models\DoctorsHasEducation;
use App\Models\DoctorsHasExperience;
use Illuminate\Support\Facades\Validator;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends Controller
{
    public function index()
    {

        $countries = Country::get();
        $Specialty = Specialty::get();
        $hospitals = Hospital::get();
        $doctors= DoctorDetail::with('country','sepcial')->get();
        $cities = json_decode(file_get_contents(storage_path() . "/city.json"), true);
        return view('backend.index', compact('countries', 'Specialty','doctors','hospitals','cities'));
    }

    public function dashboard()
    {
        $doctors = DoctorDetail::count();
        $hospitals = Hospital::count(); 
        $doctor_reviews = DoctorReview::count();
        $hospital_rating = HospitalRating::count();
        return view('backend.dashboard',compact('doctor_reviews', 'hospital_rating','doctors','hospitals'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'specialtie_id' => 'required',
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
         //insert doctor code here
         try {
            $all_inputs  = $request->except('_token', 'image');
            if ($request->file('image')) {
                $filePath = 'uploads/doctors/';
                $file = $request->file('image');
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $all_inputs['image'] = $imagename;
            }
            DoctorDetail::create($all_inputs);
            toastSuccess('Doctor successfully added!');
            return Redirect::back();
         } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }
    public function show($id)
    {
        $doctor_detail = DoctorDetail::where('id',$id)->first();
        $doctor_educations = DoctorsHasEducation::where('doctor_detail_id',$id)->get();
        $doctor_experiences = DoctorsHasExperience::where('doctor_detail_id',$id)->get();
        return view('backend.show', compact('doctor_detail','doctor_educations','doctor_experiences'));
    }

    public function store_education(Request $request)
    {
        # code...
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'specialtie_id' => 'required',
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
         //insert doctor code here
         try {
            $all_inputs  = $request->except('_token', 'image','_method');
            if ($request->file('image')) {
                $filePath = 'uploads/doctors/';
                $file = $request->file('image');
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $all_inputs['image'] = $imagename;
            }
            DoctorDetail::find($id)->update($all_inputs);
            toastSuccess('Doctor successfully updated!');
            return Redirect::back();
         } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
         }
    }
    public function destroy($id)
    {
        try {
            DoctorDetail::find($id)->delete();
            toastSuccess('Doctor successfully Deleted!');
            return back();
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }
}
