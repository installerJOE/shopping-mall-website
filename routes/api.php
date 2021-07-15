<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Http\Resources\UserResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/categories', function () {
    return new UserResource(Category::all());
});

//return all the information concerning a particular product
Route::get('/products/{id}', function ($id) {
    $products = Product::findOrFail($id);     
    /*
        join the category table to the product table to 
        produce a category object in the returned product JSON object
    */
    $products->category = $products->category;
    return new UserResource($products);
});

//return all products along with the categories they belong
Route::get('/products', function () {
    $products = Product::all();
    for($i=0; $i < count($products); $i++){
        $products[$i]->category = $products[$i]->category;
    }
    return new UserResource($products);
});

//handle authentication of users
Auth::routes();

//handle product reviews
Route::post('/review/{p_id}/{user_id}', function(Request $request, $p_id, $user_id){
    $review = new Review;
    $review->content = $request->input('content');
    $review->rating = $request->input('rating');
    $review->product_id = $p_id;
    if($request->input('anonymous') === true){
        $review->anonymous = true;
        $review->user_id = 0;
    }
    else{
        $review->anonymous = false;
        $review->user_id = $user_id;
    }
    $review->save();
    //return the message
    return response()->json([
        "message" => "Reviews has been received. Thanks."
    ], 200);
});

//service addition of product stock
Route::post('/add-stock/{user_id}', function(Request $request, $user_id){
    $user = User::findOrFail($user_id)->is_admin;
    if($user){
        $product = Product::findOrFail($request->input('id'));
        $product->stock = $product->stock + $request->input('stock');
        $product->save();
        //return success message
        return response()->json([
            "message" => "Stock has been added"
        ], 200);
    }
    else{
        //return the error message
        return response()->json([
            "message" => "You are not Authorised to add product"
        ], 403);
    }
});