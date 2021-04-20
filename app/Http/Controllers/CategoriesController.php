<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Use the line below to enable database query to and fro table 'categories'
use App\Models\Category;
use App\Models\User;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }
    
    //Display a listing of the resource.
    public function index()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin/category/index')->with('categories', $categories);
    }

    //Show the form for creating a new resource.
    public function create()
    {
        $user_id = auth()->user()->id;
        $user = User::select('user_category')->where('id', $user_id)->get();
        
        if($user[0]->user_category === "admin"){
            return view('admin/category/create');
        }
        else{
            return redirect('/categories')->with('error', 'Unauthorized Access Denied!');
        }        
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        //write to database table
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        //redirect to categories page
        return redirect('/categories')->with('success', 'Category has been Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin/category/show')->with('category', $category);
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
