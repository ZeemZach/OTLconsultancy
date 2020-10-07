<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    //
    public $table = 'categorie_product';
    public $timestamps = false;
    public function Product()
    {
        return $this->belongsToMany(Product::class,'categorie_product');
    }
   
}
