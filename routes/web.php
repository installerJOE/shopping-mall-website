<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use App\Http\Resources\testResource;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route to the home (index) page
Route::get('/', 'App\Http\Controllers\PagesController@index');

/*
Without the use of controllers this can be done
// Route::get('/library', function () {
//     return view('pages/library');
// });

*/

//Route to the product catalog page
Route::get('/catalog', 'App\Http\Controllers\PagesController@catalog');
Route::get('/user', 'App\Http\Controllers\PagesController@user');
Route::get('/about-us', 'App\Http\Controllers\PagesController@about');

Route::resource('/products','App\Http\Controllers\ProductsController');

Route::resource('/categories', 'App\Http\Controllers\CategoriesController');

// Route::resource('/brands', 'App\Http\Controllers\BrandsController');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

Auth::routes();

Route::post('/upload-image', function(Request $request){
    dd($request->all());
    
});



Route::get('/print-barcodes', function(){
    if(Gate::allows('admin-only', Auth::user())){
        $products = Product::select('id', 'title')->get();   
        return view('admin.pages.product.barcode')
            ->with('products', $products);
    }
    else{
        //throw an error page
        return back()->with('error', 'You must be an admin');
    }        
});


// Route::resource('/upload-image', 'App\Http\Controllers\ImageUploadsController');

// enable email verification
// Auth::routes(['verify' => true]);

Route::get('/email', function(){
    Mail::to('ijoe4jah@gmail.com')->send(New WelcomeMail());
    return new WelcomeMail();
});

Route::get('/verify', function(){
    return view('emails.verify');
});