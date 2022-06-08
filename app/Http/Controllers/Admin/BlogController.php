<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::get();
        return view('backend.blogs',compact('blogs'));
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
         try {
            $all_inputs  = $request->except('_token', 'image');
            #uploading Image
            if ($request->file('image')) {
                $filePath = 'uploads/blogs/';
                $file = $request->file('image');
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $all_inputs['image'] = $imagename;
            }
            Blog::create($all_inputs);
            toastSuccess('Blog successfully added!');
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
            #uploading Image
            if ($request->file('image')) {
                $filePath = 'uploads/blogs/';
                $file = $request->file('image');
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $all_inputs['image'] = $imagename;
            }
            Blog::find($request->id)->update($all_inputs);
            toastSuccess('Blog successfully updated!');
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
            Blog::find($id)->delete();
            toastSuccess('Blog successfully Deleted!');
            return back();
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }
}
