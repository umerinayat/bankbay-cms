<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{

    // table fields that are mass assignable
    protected $fillable = [
        'name', 'vendor_url', 'description',
        'phone_number', 'logo', 'is_popular', 'is_publish'
    ];

    // vendor has many products
    public function products() {
        return $this->hasMany('App\Product');
    }

    // store new vendor
    public static function storeVendor ( $inputs ) {
        $vendor = Vendor::create($inputs);
        return $vendor;
    }

    // update existing vendor
    public static function updateVendor ( $inputs, $vendor ) {
        $vendor->update($inputs);
        return $vendor;
    }
}
