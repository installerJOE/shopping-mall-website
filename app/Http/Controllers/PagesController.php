<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Redirect to Home Page
    public function index(){
        $title = "Welcome to the Home Page of my Laravel Project";
        return view('pages/index')->with('mainHeader', $title);
    }

    // Redirect to catalog page
    public function catalog(){
        $data = array();
        return view('pages/catalog')->with('data', $data);
    }

    // Redirect to the about page
    public function about(){
        $title = "Welcome to the About Page!";
        return view('pages/about')->with('mainHeader', $title);
    }
}
