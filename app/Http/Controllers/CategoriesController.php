<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
//Use the line below to enable database query to and fro table 'categories'
use App\Models\Category;
use App\Models\Product;
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
        //create an authorization and exceptions of these authorizations
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }
    
    //Display a listing of the resource (categories).
    public function index()
    {
        $products = Product::all();
        if($products !== null){
            $categories = Category::orderBy('created_at','desc')->get();
            return view('admin.pages.category.index')
                    ->with('categories', $categories)
                    ->with('products', $products)
                    ->with('is_admin', $this->declareAdminStatus());
        }
        else{
            return view('admin.pages.category.index')
                    ->with('categories', $categories)
                    ->with('is_admin', $this->declareAdminStatus());
        }
        
    }

    //Show the form for creating a new resource (category).
    public function create()
    {
        if(Gate::allows('admin-only', Auth::user())){
            return view('admin.pages.category.create');
        }
        else{
            //throw an error page
            return back()->with('error', 'You must be an admin');
        }        
    }

    //Store a newly created resource (category) in storage
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        
        //write to database table
        try{
            $category = new Category;
            $category->title = $request->input('title');        
            $category->slug = $this->slug_generator($request->input('title'));;
            $category->description = $request->input('description');
            $category->save();
            //redirect to categories page
            return redirect('/categories')->with('success', $category->title . ' has been successfully added as a category.');
        }
        //if category already exists (issue of double entry)
        catch(\Illuminate\Database\QueryException $ex){
            $errorCode = $ex->errorInfo[1];
            if($errorCode === 1062){
                return back()->with('error', 'Category Already Exists');
            }
        }            
    }

    //display page of individual category
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.pages.category.show')
                ->with('category', $category)
                ->with('products', $category->products)
                ->with('is_admin', $this->declareAdminStatus());
    }

    public function edit($id)
    {
        if(Gate::allows('admin-only', Auth::user())){
            $category = Category::findOrFail($id);
            return view('admin.pages.category.edit')->with('category', $category);   
        }
        else{
            // send an error 404 page not found later on
            return back()->with('error', 'Access Denied!.');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->title = $request->input('title');        
        $category->slug = $this->slug_generator($request->input('title'));
        $category->description = $request->input('description');
        $category->save();
        //redirect to categories page
        return redirect('/categories')->with('success', 'Category updated successfully.');               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/categories')->with('success', $category->title . ' has been removed as a category.');
    }
}
