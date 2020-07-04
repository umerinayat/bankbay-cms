<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFieldOption extends Model
{

    protected $fillable = [
        'is_listing', 'is_filter', 'product_field_id',
    ];

    public function productField ()
    {
        return $this->belongsTo('/App/ProductField');
    }
}
