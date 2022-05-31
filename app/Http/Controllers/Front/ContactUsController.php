<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contact-us');
    }
    public function store(Request $request)
    {
         try 
         {
            $all_inputs  = $request->except('_token');
            ContactUs::create($all_inputs);
            toastr()->success('Your message send succesfully!');
            return back();
         }
         catch (\Exception $exception) 
         {
            toastr()->error('Something went wrong, try again');
            return back();
         }
    }
}
