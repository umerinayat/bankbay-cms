<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductFieldOption;

class ProductField extends Model
{
    protected $fillable = [
        'name', 'value', 'product_id',
    ];
    public $timestamps = false;

    public function product() 
    {
        return $this->belongsTo('\App\Product');
    }

    public function productFeildOption() 
    {
        return $this->hasOne('\App\ProductFieldOption');
    }

    // store new product fields
    public static function storeProductFields ( $inputs ) {
        
        $productField = null;

        if (count ($inputs['customFieldsNames']) > 0) 
        {
            foreach ($inputs['customFieldsNames'] as $key => $value) 
            {
               $productField =  ProductField::create([
                    'name' => $value,
                    'value' => $inputs['customFieldsValues'][$key],
                    'product_id' => $inputs['product_id'],
                ]);

                // storing product field options

                $productFieldOption = new ProductFieldOption();
                $productFieldOption->product_field_id = $productField->id;

                if ( isset($inputs['customFieldsOptions'][$key]) && count ($inputs['customFieldsOptions'][$key]) > 0 )
                {   
                    // is listing
                   if ( isset( $inputs['customFieldsOptions'][$key]['is-listing'] ) &&  
                        $inputs['customFieldsOptions'][$key]['is-listing'] === 'on' )
                   {
                        $productFieldOption->is_listing = true;
                   } 
                   else 
                   {
                        $productFieldOption->is_listing = false;
                   }

                   // is filter
                   if ( isset( $inputs['customFieldsOptions'][$key]['is-filter'] ) &&
                        $inputs['customFieldsOptions'][$key]['is-filter'] === 'on')
                   {
                        $productFieldOption->is_filter = true;
                   }
                   else 
                   {
                        $productFieldOption->is_filter = false;
                   }

                    $productFieldOption->save();
                    
                } else 
                {
                    $productFieldOption->save();
                }
            }
        }

        return $productField;
    }

    // update existing product fields
    public static function updateProductFields ( $inputs, $productField ) {
       
    }
}
