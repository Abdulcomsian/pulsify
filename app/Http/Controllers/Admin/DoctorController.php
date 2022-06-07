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
        return view('backend.index', compact('countries', 'Specialty','doctors','hospitals'));
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
        //
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
