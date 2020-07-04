@extends('layouts.master')

@section('page-title')
    Blog Categories
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Blog Categories</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
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
                    
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($postCategories as $pCat)
                                <tr>
                                    <th scope="row">{{$pCat->id}}</th>
                                    <td>{{$pCat->name}}</td>
                                    <td>{{$pCat->slug}}</td>
                                    <td>
                                        <a href="{{route('BlogPostsCategory.edit', ['BlogPostsCategory' => $pCat])}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        <form style="display:inline" class="inline-form" action="{{route('BlogPostsCategory.destroy', ['BlogPostsCategory' => $pCat])}}" method="POST">
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