<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    protected $fillable = ['name', 'product_categories_id'];
    public $timestamps = false;

    public function category() {
        return $this->belongsTo('App\ProductCategory', 'product_categories_id');
    }

    public function filterControls () 
    {
        return $this->hasMany('\App\FilterControl');
    } 

    public function productFilterOption () 
    {
        return $this->hasOne('\App\ProductFilterOption');
    } 

}
