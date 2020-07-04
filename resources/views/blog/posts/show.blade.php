@extends('layouts.master')

@section('page-title')
    Blog Post Detail
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Blog Post Detail </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Posts</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">View</a></li>
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
                    <div class="row  card-header">
                        <div class="col-xl-12">
                        <!-- Featured Image -->

                            <img src="https://via.placeholder.com/1200X150" alt="" class="img-fluid mx-auto d-block">                        
                        
                        <!-- /Featured Image -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="mt-4 mt-xl-3">
                     
                                <h4 class="mt-1 mb-3">{{$post->title}}</h4>

                                <span class="text-dark">Category</span>
                                <p class="text-muted mb-4">{{$post->category->name}}</p>
                            
                                <span class="text-dark">Status</span>
                                <p class="text-muted mb-4">{{$post->status}}</p>

                                <span class="text-dark">Description</span>
                                <p class="text-muted mb-2">{{$post->short_description}}</p>
                                <span class="text-dark">Post Content</span>
                                <p class="text-muted mb-4">{!!$post->post_content!!}</p>

                               

                              
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