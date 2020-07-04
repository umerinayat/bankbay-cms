<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name', 'type',
    ];

    public function products () {
        return $this->hasMany('App\Product');
    }

    public function productFilter () 
    {
        return $this->hasOne('\App\ProductFilter');
    } 

    // store product category
    public static function storeProductCategory ($input)
    {
        $productCategory = ProductCategory::create($input);
        return $productCategory;
    }

    // update product category 
    public static function updateProductCategory ($input, $productCategory)
    {
        $productCategory->update($input);
        return $productCategory;
    }
}
