<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use App\Models\ImageUpload;

class BrandsController extends Controller
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
    
    public function index(){
        $brands = Brand::orderBy('created_at', 'desc')->get();
        $image = ImageUpload::all();

        //restrict the showing of the create button in the index page to only central admin
        if(auth()->user() !== null){
            $is_admin = auth()->user()->is_admin;         
        }
        else{
            $is_admin = null;
        }
        return view('admin/brand/index')
            ->with('brands', $brands)
            ->with('is_admin', $is_admin)
            ->with('image', $image);       
    }

    public function create(){
        //if the user is an admin, execute the block
        if(auth()->user()->is_admin === 1){
            $categories = Category::select('name')->get();
            return view('admin/brand/create')
                ->with('categories', $categories);
        }
        // redirect if user is unauthorized
        else{
            return redirect('/brands')->with('error', 'You must be an adminstrator!');
        }
    }

    public function store(Request $request){
        
        $required = $request->validate([
            'brand_name' => 'required',
            'description' => 'required',
        ]);
        $category = $request->input('category');
        $category_array = Category::select('id')->where('name', $category)->get();

        if(count($category_array) <= 0){
            return redirect()->back()->with('error', 'Please choose a category');
        }
        else{
            //write values to brand table
            $brand = new Brand();
            $brand->name = $request->input('brand_name');
            $brand->description = $request->input('description');
            $brand->category_id =  $category_array[0]->id;
            $brand->rating = 0;
            $brand->save();
            return redirect('/brands')->with('success', 'Brand has been added successfully');
        }      
        
    }

    public function show($id){
        $category = Brand::find($id)->category;
        $brand = Brand::findOrFail($id);
        return view('admin/brand/show')
            ->with('brand', $brand)
            ->with('category', $category);
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }
}
