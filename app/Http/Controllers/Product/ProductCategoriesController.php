<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use \App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.product-categories.index', [
            'productCategories' => ProductCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.product-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\StoreProductCategory $request)
    {   
        $pCategory = ProductCategory::storeProductCategory($request->all());
        return redirect()->action('Product\ProductCategoriesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $ProductCategory)
    {
        return $ProductCategory;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $ProductCategory)
    {
        return view('products.product-categories.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $ProductCategory)
    {   
        $pCategory = ProductCategory::updateProductCategory($request->all(), $ProductCategory);
        return redirect()->action('Product\ProductCategoriesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $ProductCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $ProductCategory)
    {
        $ProductCategory->delete();
        return redirect()->action('Product\ProductCategoriesController@index');
    }
}
