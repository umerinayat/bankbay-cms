@extends('layouts.master')

@section('page-title')
    Vendor Details
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Vendor Details </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vendors</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Vendor Details</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-right">
                    <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                </div>
                <div class="card-body">
                    <div class="row">

                        <!-- logo Image -->

                        <div class="col-xl-3">
                            <img src="https://via.placeholder.com/300" alt="" class="img-fluid mx-auto d-block">                        
                        </div>

                        <!-- /logo Image -->
                        <div class="col-xl-9">
                            <div class="mt-4 mt-xl-3">
                     
                                <h4 class="mt-1 mb-3">{{$vendor->name}}</h4>

                            
                                <span class="text-dark">Vendor URL</span>
                                <p class="text-muted mb-4"><a href="{{$vendor->vendor_url}}">{{$vendor->vendor_url}}</a></p>

                                <span class="text-dark">Phone Number</span>
                                <p class="text-muted mb-4">{{$vendor->phone_number ?? '__________'}}</p>

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <div>
                                            <p class="text-muted"> Is Publish: {{$vendor->is_publish ? 'YES' : 'NO'}}  </p>
                                            
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                        <p class="text-muted">Is Popular: {{$vendor->is_popular ? 'YES' : 'NO'}}</p>
                                         
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="text-dark">Description:</span>
                                        <p class="text-muted">{{$vendor->description ?? '__________'}}</p>
                                    </div>
                                </div>

                              
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>

    



@endsection