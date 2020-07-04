@extends('layouts.master')

@section('page-title')
    Vendors
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Vendors</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vendors</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">View All</a></li>
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
                    <a class="btn btn-sm btn-success" href="{{route('vendor.create')}}">Add New</a>
                    
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Is Publish</th>
                                    <th>Is Popular</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($vendors as $vendor)
                                <tr>
                                    <th scope="row">{{$vendor->id}}</th>
                                    <td>{{$vendor->name}}</td>
                                    <td>{{$vendor->is_publish ? 'YES' : 'NO'}}</td>
                                    <td>{{$vendor->is_popular ? 'YES' : 'NO'}}</td>
                                    <td>
                                        <a href="{{route('vendor.show', ['vendor' => $vendor->id])}}" class="btn btn-sm btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                @endforeach
                              
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection