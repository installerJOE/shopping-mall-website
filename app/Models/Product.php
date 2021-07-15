<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //hide the properties below when returning a json object
    protected $hidden = ['category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function cart(){
        return $this->hasMany(CartItem::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}