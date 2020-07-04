<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealEstateProduct extends Model
{
    protected $fillable = [
        'sub_heading',
        'property_type',
        'intended_use',
        'origination_fee',
        'interest_rate',
        'credit_score',
        'product_id'
    ];

    public function product() 
    {
        return $this->belongsTo('\App\Product');
    }


    public function getColumnsName ()
    {
        $columns = new \stdClass();
        $columns->raw = $this->fillable;
    
        return  $columns;
    }
}
