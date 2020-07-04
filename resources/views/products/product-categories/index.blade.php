@extends('layouts.master')

@section('page-title')
    Products Categories
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Products Categories</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
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
                <div class="card-body">
                <div class="card-header text-right">
                    <a class="btn btn-sm btn-success" href="{{route('ProductCategory.create')}}">Add New</a>
                    
                </div>
                    <div class="table-responsive text-center">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                   
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($productCategories as $pCat)
                                <tr>
                                    <th scope="row">{{$pCat->id}}</th>
                                    <td>{{$pCat->name}}</td>
                                    <td>{{ucfirst($pCat->type)}}</td>
                                    <td>
                                    <a href="{{route('ProductCategory.edit', ['ProductCategory' => $pCat])}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form style="display:inline" class="inline-form" action="{{route('ProductCategory.destroy', ['ProductCategory' => $pCat])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger ml-2">Delete</button>
                                        </form>
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