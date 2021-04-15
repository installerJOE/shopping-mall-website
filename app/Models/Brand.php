<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //table name
    protected $table = 'brands';
    //primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
