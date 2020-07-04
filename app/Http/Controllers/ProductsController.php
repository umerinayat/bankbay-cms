<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProduct;
use App\Http\Requests\Product\UpdateProduct;
use App\Product;
use App\ProductCategory;
use App\ProductField;
use App\Vendor;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        
        $products = Product::with('vendor', 'category')->get();
        $data['products'] = $products;

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['productCategories'] = ProductCategory::all();
        $data['vendors'] = Vendor::all();
      
        return view('products.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {

       // dd ($request->all());
       
        $request['is_popular'] = $request['is_popular'] === 'on' ? true : false;
        $request['is_publish'] = $request['is_publish'] === 'on' ? true : false;
       
        $newProduct = Product::storeProduct($request->all());
        $request['product_id'] = $newProduct->id;

        ProductField::storeProductFields($request->all());

    
        return redirect()->action('ProductsController@show', ['product' => $newProduct]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   
        $data = [];

        $product = $product->where('id', $product->id)->with('category','vendor','fields')->get()[0];
        $data['product'] = $product;

        //dd($data['product']);

        return view('products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.eidt', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, Product $product)
    {
        //return redirect()->action('ProductsController@show', ['product' => $newProduct]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->action('ProductsController@index');
    }

 
}
