<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // method to get authenticated user admin status 
    public function declareAdminStatus(){
        if(Auth::check()){
            $is_admin = Auth::user()->is_admin;
        }
        else{
            $is_admin = null;
        }
        return $is_admin;
    }

    // method for generating slug
    public function slug_generator($title){
        $main_title_arr = explode(' ', $title);
        $slug = strtolower(join('-', $main_title_arr));
        return $slug;
    }

    // method for initializing a nullable input during data storage or update
    public function nullableInput($input){
        if(isset($input)){
            return $input;
        }
        return 0;
    }
}
