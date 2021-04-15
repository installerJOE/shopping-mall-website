<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to the Home Page of my Laravel Project";
        return view('pages/index')->with('mainHeader', $title);
    }

    public function catalog(){
        $data = array(
            "title" => "Products Catalogue Containing List of Products!",
            "productList" => [
                "Books", "Magazines", "Groceries", "Fruits", "vegetables"
            ]
        );
        return view('pages/catalog')->with($data);
    }

    public function user(){
        $title = "This is the User Page. Welcome!";
        return view('pages/user')->with('mainHeader', $title);
    }

    public function about(){
        $title = "Welcome to the About Page!";
        return view('pages/about')->with('mainHeader', $title);
    }
}
