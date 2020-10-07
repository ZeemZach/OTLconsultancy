<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    
    public function CategoryProduct()
    {
        return $this->belongsToMany(CategoryProduct::class,'categorie_product');
    }
    

}
