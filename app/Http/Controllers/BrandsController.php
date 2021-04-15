<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandsController extends Controller
{
    
    public function index(){
        $brands = Brand::orderBy('created_at', 'desc')->get();
        return view('admin/brand/index')->with('brands', $brands);
    }

    public function create(){
        $categories = Category::select('name')->get();
        return view('admin/brand/create')->with('categories', $categories);
    }

    public function store(Request $request){
        
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
        return view('admin/brand/show');
    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }
}
