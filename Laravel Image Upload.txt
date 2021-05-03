<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageUpload;

class ImageUploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image_upload');
    }

    public function store(Request $request)
    {
        //store the file path in the database as well as the the image
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,gif,svg|max:5036'
        ]);
        
        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        // return $fileNameWithExt;

        // Extract the name of the file
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // Extract the extension from the file
        $fileExtension = $request->file('image')->getClientOriginalExtension();
        //get the file name to be stored
        $filenameToStore = $filename . "_" . time() . "." . $fileExtension;
        
        // Upload Image
        // $path = $request->image->move(public_path('images'), $image_path);
        $path = $request->file('image')->storeAs('public/images', $filenameToStore);
        
        $image = new ImageUpload();
        $image->image_url = $filenameToStore;
        $image->save();

        return back()->with('success', 'Image upload successful.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
