<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contact-us');
    }
    public function store(Request $request)
    {
        // dd($request->all());
         try 
         {
            $all_inputs  = $request->except('_token');
            ContactUs::create($all_inputs);
            $details = [
                'subject' => $request->subject,
                'body' => $request->message,
                'email' => $request->email,
            ];
           
            \Mail::to('admin@gmail.com')->send(new \App\Mail\ContactUsMail($details));

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
