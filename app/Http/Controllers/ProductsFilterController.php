<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductFilter;
use App\ProductFilterOption;
use App\FilterControl;
use App\FilterControlOption;
use App\ProductCategory;


class ProductsFilterController extends Controller
{   
    private $request = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    // show create filter form
    public function create ()
    {
        $data = [];
        $data['productCategories'] = ProductCategory::all();
      
        return view('products.filters.create', $data);
    }

    // store filter
    public function store(Request $request) 
    {   
        //dd( $request->all() );

        // $request = [
        //     'productFilter' => [
        //         'name' => 'Credit Card',
        //         'product_categories_id' => 1,
        //         'productFilterOptions' => [
        //             'is_vendor' => false,
        //             'is_product_category' => true,
        //         ],
        //         'filterControls' => [
        //             'name' => 'credit score',
        //             'type' => 'select',
        //             'filterControlOptions' => [
        //                 'value' => '300 +',
        //             ],
        //         ]
        //     ],
           
        // ];

        // product filter
        $productFilter = ProductFilter::create([
            'name' => $request['name'],
            'product_categories_id' => $request['product_categories_id'],
        ]);

        $productFilterOptions = ProductFilterOption::create([
            'is_product_category' => $request['is_product_category'] == 'on' ? true : false,
            'is_vendor' => $request['is_vendor'] == 'on' ? true : false,
            'product_filter_id' => $productFilter->id
        ]);

        //  filter controls
        foreach ( $request['customFieldsNames'] as $key => $val ) 
        {   
            if ( isset ($request['customFieldsMoreValues'][$key]) ) {
                $type = 'select';
            }
            else {
                $type = 'input';
            }

            $filterControl = FilterControl::create([
                'name' => $val,
                'type' => $type,
                'product_filter_id' =>  $productFilter->id
            ]);

            //  filter options
            if ( isset ($request['customFieldsMoreValues'][$key]) ) 
            {

                foreach ( $request['customFieldsMoreValues'][$key] as $val  ) 
                {
                    $filterControlOption = FilterControlOption::create([
                        'value' => $val,
                        'filter_control_id' => $filterControl->id
                    ]);
                }

            } 
            else 
            {

                $filterControlOption = FilterControlOption::create([
                    'value' => $request['customFieldsValues'][$key],
                    'filter_control_id' => $filterControl->id
                ]);

            }

           
        }

        
    }


    // get filter Detail
    public function getFilter ( $categoryId )
    {
        //dd( $categoryId );

        $productFilter = ProductFilter::where('product_categories_id', $categoryId)
        ->with('productFilterOption', 'filterControls')->get();

        foreach (   $productFilter as $pt )
        {   
            foreach ( $pt->filterControls as $fc ) {
                $fc->filterControlOptions;
            }    
        }

        if ( count ( $productFilter ) > 0 ) 
        {

            
           return $productFilter;

        }


    }
}
