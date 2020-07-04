<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'price', 'old_price', 
        'currency', 'product_url',
        'description', 'featured_image',
        'is_popular', 'is_publish',
        'product_categories_id', 'vendor_id',
    ];

    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }

    public function category() {
        return $this->belongsTo('App\ProductCategory', 'product_categories_id');
    }

    public function creditCard () 
    {
        return $this->hasOne('\App\CreditCardProduct');
    }

    public function realEstate () 
    {
        return $this->hasOne('\App\RealEstateProduct');
    }

    public function fields ()
    {
        return $this->hasMany('\App\ProductField');
    }

    // store new product
    public static function storeProduct ( $inputs ) {
        $product = Product::create($inputs);
        return $product;
    }

    // update existing product
    public static function updateProduct ( $inputs, $product ) {
        $product->update($inputs);
        return $product;
    }
    
}
