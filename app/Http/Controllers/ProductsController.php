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
        $this->middleware('auth', ['except'=>['index', 'show', 'barcode']]);
    }

    public function index()
    {
        $products = Product::orderBy('likes', 'asc')->get();
        return view('admin.pages.product.index')
                ->with('products', $products)
                ->with('is_admin', $this->declareAdminStatus());
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
        $this->validate($request, [
            'product_name' => 'required',
            'description' => 'required',
            'product_image' => 'image|nullable',
        ]);

        // Handle file upload
        if($request->hasfile('product_image')){
            
            
            if($request->input('base64image') || $request->input('base64image') != '0'){
                $folderPath = public_path('storage/images/product_images');
                $image_parts = explode(';base64,', $request->input('base64image'));
                $image_types_aux = explode('image/', $image_parts[0]);
                $image_type = $image_types_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $filename = $this->slug_generator($request->input('product_name')) . "_" . time() . "." . $image_type;
                $file = $folderPath . $filename;
                $path = str_replace('\\', '/',  $file);
                file_put_contents($path, $image_base64);
            }
        }
        else{
            $filename = "no_product_img.png";
            dd($request->all());
        }
        
        //write product information to database table
        try{
            $product = new Product;
            $product->title = $request->input('product_name');        
            $product->slug = $this->slug_generator($request->input('product_name'));
            $product->description = $request->input('description');
            $product->category_id = $request->input('category');
            $product->price = $request->input('price');
            $product->discount = $this->nullableInput($request->input('discount'));
            $product->image_url_1 = $filename;
            //encode product by means of the md5 hash function
            $product->barcode = hash('md5', $product->slug . $product->description);
            //save in database table
            $product->save();
            //redirect to products page
            return redirect('/products')->with('success', $product->title . ' has been successfully added as a product.');
        }
        //if product already exists (issue of double entry)
        catch(\Illuminate\Database\QueryException $ex){
            $errorCode = $ex->errorInfo[1];
            if($errorCode === 1062){
                return back()->with('error', 'Attention! This product already exists.');
            }
        }            
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $category = $product->category;
        return view('admin.pages.product.show')
                ->with('category', $category)
                ->with('product', $product)
                ->with('is_admin', $this->declareAdminStatus());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //display edit page with each value present in the input fields
        $product = Product::findOrFail($id);
        return view('admin.pages.product.edit')
                ->with('category', $product->category)
                ->with('product', $product)
                ->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'description' => 'required'
        ]);

        //update product information to database table
        $product = Product::findOrFail($id);

        try{
            //fetch data from the form
            $product->title = $request->input('product_name');        
            $product->slug = $this->slug_generator($request->input('product_name'));
            $product->description = $request->input('description');
            $product->category_id = $request->input('category');
            $product->price = $request->input('price');
            
            //encode product by means of the md5 hash function
            $product->barcode = hash('md5', $product->slug . $product->description);

            $product->discount = $this->nullableInput($request->input('discount'));
            $product->save();
            //redirect to products page
            return redirect('/products')->with('success', 'Product updated successfully.'); 
        }
        //if product already exists (issue of double entry)
        catch(\Illuminate\Database\QueryException $ex){
            $errorCode = $ex->errorInfo[1];
            if($errorCode === 1062){
                return back()->with('error', 'Attention! This product already exists.');
            }
        }        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products')->with('success', $product->title . ' is no longer a product.');
    }
}
