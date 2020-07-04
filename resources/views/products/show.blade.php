@extends('layouts.master')

@section('page-title')
    Product Detail
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Product Detail </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Product Detail</a></li>
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

                        <!-- Featured Image -->

                        <div class="col-xl-3">
                            <img src="https://via.placeholder.com/300" alt="" class="img-fluid mx-auto d-block">                        
                        </div>

                        <!-- /Featured Image -->
                        <div class="col-xl-9">
                            <div class="mt-4 mt-xl-3">
                     
                                <h4 class="mt-1 mb-3">{{$product->name}}</h4>

                            
                                <span class="text-dark">Product URL</span>
                                <p class="text-muted mb-4"><a href="{{$product->product_url}}">{{$product->product_url}}</a></p>

                                <span class="text-dark">Price</span>
                                <p class="text-muted mb-2">{{$product->currency  ?? ''}} {{$product->price ?? '__________'}}</p>
                                <span class="text-dark">Old Price</span>
                                <p class="text-muted mb-4">{{$product->currency  ?? ''}} {{$product->old_price ?? '__________'}}</p>

                                
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                       
                                        <p class="text-muted">Vendor: {{$product->vendor->name}}</p>
                                        
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-muted">Category: {{$product->category->name}}</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-muted"> Is Publish: {{$product->is_publish ? 'YES' : 'NO'}}  </p>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <p class="text-muted">Is Popular: {{$product->is_popular ? 'YES' : 'NO'}}</p>
                                    </div>
                                    
                                </div>
                                
                                <!-- Product Detail -->
                                @if( count( $product->fields ) > 0 )
                                <div class="row mb-3">
                                    @foreach(  $product->fields as $field )
                                     
                                        <div class="col-md-3">
                                            <div>
                                                <p class="text-muted"> {{ $field->name }}: 
                                                    {{ $field->value }} 
                                                </p>
                                            </div>
                                        </div>
                                      
                                    @endforeach
    
                                </div>
                                @endif
                                <!-- Product Detail -->


                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="text-dark">Description:</span>
                                        <p class="text-muted">{{$product->description ?? '__________'}}</p>
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