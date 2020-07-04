@extends('layouts.master')

@section('page-title')
    Blog Posts
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Blog Posts</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Posts</a></li>
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
                    <a class="btn btn-sm btn-success" href="{{route('BlogPost.create')}}">Add New</a>
                    
                </div>
                    <div class="table-responsive text-center">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                            
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($posts as $post)
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->title}}</td>
                                    <th>{{$post->category->name}}</th>
                                    <td>{{$post->status}}</td>
                                    <td>
                                        <a href="{{route('BlogPost.show', ['BlogPost' => $post])}}" class="btn btn-sm btn-outline-primary">View</a>
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