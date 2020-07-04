<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFilterOption extends Model
{
    protected $fillable = ['is_product_category', 'is_vendor', 'product_filter_id'];
    public $timestamps = false;

  
    public function productFilter () 
    {
        return $this->belongsTo('\App\ProductFilter');
    }
}
