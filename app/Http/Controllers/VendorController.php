<?php

namespace App\Http\Controllers;

use App\Http\Requests\vendor\StoreVendor;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [];

        $vendors = Vendor::all();
        $data['vendors'] = $vendors;

        return view('p-vendors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('p-vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendor $request)
    {
        $request['is_popular'] = $request['is_popular'] === 'on' ? true : false;
        $request['is_publish'] = $request['is_publish'] === 'on' ? true : false;

        $newVendor = Vendor::storeVendor($request->all());
        return redirect()->action('VendorController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return view('p-vendors.show', ['vendor' => $vendor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('p-vendors.edit', ['vendor'=> $vendor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\vendor\UpdateVendor $request, Vendor $vendor)
    {
        $updatedVendor = Vendor::updateVendor($request->all(), $vendor);
        return redirect()->action('VendorController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()->action('VendorController@index');
    }
}
