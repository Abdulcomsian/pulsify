<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\Validations;
use App\Models\Specialty;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Specialty = Specialty::get();
        return view('backend.specialty', compact('Specialty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validations::storeSpecialty($request);
        try {
            $all_inputs  = $request->except('_token', 'image');
            #uploading Image
            if ($request->file('image')) {
                $filePath = 'uploads/specialty/';
                $file = $request->file('image');
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $all_inputs['image'] = $imagename;
            }
            if ($request->is_featured == 'on') {
                $all_inputs['is_featured'] = 1;
            }
            Specialty::create($all_inputs);
            toastSuccess('Specialty successfully added!');
            return Redirect::back();
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $all_inputs  = $request->except('_token', 'image', '_method', 'id');
            $all_inputs['is_featured'] = 0;
            #uploading Image
            if ($request->file('image')) {
                $filePath = 'uploads/specialty/';
                $file = $request->file('image');
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $all_inputs['image'] = $imagename;
            }
            if ($request->is_featured == 'on') {
                $all_inputs['is_featured'] = 1;
            }
            Specialty::find($request->id)->update($all_inputs);
            toastSuccess('Specialty successfully updated!');
            return Redirect::back();
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Specialty::find($id)->delete();
            toastSuccess('Specialty successfully Deleted!');
            return back();
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }
}
