<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterControl extends Model
{
    protected $fillable = ['name', 'type', 'product_filter_id'];
    public $timestamps = false;

    public function productFilter () 
    {
        return $this->belongsTo('\App\ProductFilter');
    } 

    public function filterControlOptions () 
    {
        return $this->hasMany('\App\FilterControlOption');
    } 
}
