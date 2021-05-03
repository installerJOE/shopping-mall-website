<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Use the line below to enable database query to and fro table 'categories'
use App\Models\Category;
use App\Models\User;
use App\Models\Brand;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //create an authorization and exceptions of these authorizations
        $this->middleware('auth', ['except'=>['index', 'show',]]);
    }
    
    //Display a listing of the resource (categories).
    public function index()
    {

        $categories = Category::orderBy('created_at','desc')->get();
        if(auth()->user() !== null){
            $is_admin = auth()->user()->is_admin;
        }
        else{
            $is_admin = null;
        }
        return view('admin/category/index')->with('categories', $categories)->with('is_admin', $is_admin);
    }

    //Show the form for creating a new resource (category).
    public function create()
    {
        if(auth()->user()->is_admin === 1){
            return view('admin/category/create');
        }
        else{
            return redirect('/categories')->with('error', 'Access Denied!');
        }        
    }

    
    //Store a newly created resource (category) in storage
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        $category_name = $request->input('name');
        
        //write to database table
        $category = new Category;
        $category->name = $category_name;        
        $category->description = $request->input('description');
        $category->save();

        //redirect to categories page
        return redirect('/categories')->with('success', $category_name . ' has been successfully added as a category.');
    }

    //display page of individual category
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin/category/show')->with('category', $category);
    }

    public function edit($id)
    {
        if(auth()->user()->is_admin !== 0){
            $category = Category::findOrFail($id);
            return view('admin/category/create')->with('category', $category);   
        }
        else{
            // send an error 404 page not found later on
            redirect('/categories')->with('error', 'You are not authorized.');
        }
    }

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
