<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function products()
    {
        return $this->hasMany('App\Product'); // This only gets the products of the CURRENT category
    }
}
