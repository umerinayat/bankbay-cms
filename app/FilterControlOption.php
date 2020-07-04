<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterControlOption extends Model
{
    protected $fillable = ['name', 'value', 'filter_control_id'];
    public $timestamps = false;

    public function filterControl () 
    {
        return $this->belongsTo('\App\FilterControl');
    } 
}
