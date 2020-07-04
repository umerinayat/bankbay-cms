@extends('layouts.master')

@section('page-title')
    Add New Product Category
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Add New Product Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Add New</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form action="{{route('ProductCategory.store')}}" method="POST">
    
        @include('products.product-categories.fields')

        <button type="submit" class="btn btn-success">Add</button>
    
    </form>



@endsection