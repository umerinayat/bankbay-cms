@extends('layouts.master')

@section('page-title')
    Add New Vendor
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Add New Vendor</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vendors</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Add New</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form action="{{route('vendor.store')}}" method="POST">
    
        @include('p-vendors.fields')

        <button type="submit" class="btn btn-success">Add</button>
    
    </form>



@endsection