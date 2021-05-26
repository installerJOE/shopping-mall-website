<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;



class ProductsController extends Controller
{
    public function __construct()
    {
        //create an authorization and exceptions of these authorizations
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }

    public function index()
    {
        $products = Product::orderBy('likes', 'asc')->get();
        return view('admin.pages.product.index')
                ->with('products', $products)
                ->with('is_admin', $this->declareAdminStatus());
    }

    // Function to get authenticated user admin status 
    public function declareAdminStatus(){
        if(Auth::check()){
            $is_admin = Auth::user()->is_admin;
        }
        else{
            $is_admin = null;
        }
        return $is_admin;
    }

    // Function for generating slug
    public function slug_generator($title){
        $main_title_arr = explode(' ', $title);
        $slug = strtolower(join('-', $main_title_arr));
        return $slug;
    }

    public function create()
    {
        $products = Product::all();
        if(Gate::allows('admin-only', Auth::user())){
            return view('admin.pages.product.create')->with('categories', Category::all());
        }
        else{
            //throw an error page
            return back()->with('error', 'You must be an admin');
        }        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        if(Gate::allows('admin-only', Auth::user())){
            return view('admin.pages.product.show')
                    ->with('products', $products);
        }
        else{
            //throw an error page
            return back()->with('error', 'You must be an admin');
        }  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
