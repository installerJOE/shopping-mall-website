<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //table name
    protected $table = 'categories';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
    
}
