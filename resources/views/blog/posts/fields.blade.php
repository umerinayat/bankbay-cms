<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title  -->
                <div class="form-group row">
                    <label for="title" class="col-md-2 col-form-label">Title</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="title" id="title" value="" placeholder="Post Title">
                    </div>
                </div>
                <!-- /title  -->
                    <!-- slug -->
                    <div class="form-group row">
                    <label for="slug" class="col-md-2 col-form-label">Slug</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="slug" id="slug" value="" placeholder="Enter Post slug for URL">
                    </div>
                </div>
                <!-- /slug -->
                <!-- post category -->
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Post Category</label>
                    <div class="col-md-10">
                        <select class="custom-select" name="post_category_id">
                            <option disabled selected="">Select Post Category</option>
                            @foreach( $postCategories as $cat )
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /post category -->
                <!-- post type -->
                                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Type</label>
                    <div class="col-md-10">
                        <select class="custom-select" name="type">
                            <option disabled selected="">Select category type</option>

                            <option value="blog">Blog</option>
                            <option value="education">Education</option>

                        
                        </select>
                    </div>
                </div>
                <!-- /post type -->
                <!-- short_description -->
                <div class="form-group row">
                    <label for="short_description" class="col-md-2 col-form-label">Description</label>
                    <div class="col-md-10">
                        <textarea name="short_description" id="short_description" placeholder="Write Post description..." cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <!-- /short_description -->
                 <!-- post_content -->
                 <div class="form-group row">
                    <label for="post_content" class="col-md-2 col-form-label">Post Content</label>
                    <div class="col-md-10">
                        <textarea name="post_content" id="post_content" placeholder="Write Post Content..." cols="30" rows="5" class="form-control blog-post"></textarea>
                    </div>
                </div>
                <!-- /post_content -->
                <!-- featured_image -->
                    <div class="form-group row mt-4">
                    <label for="featured_image" class="col-md-2 col-form-label">Featured Image</label>
                    <div class="col-md-10 mt-2">
                        <input  type="file" name="featured_image" id="featured_image">
                    </div>
                </div>
                <!-- / featured_image -->
                <!-- status -->
                <div class="form-group row mb-0">
                    <label class="col-md-2 col-form-label">Status</label>
                    <div class="col-md-10">
                        <select class="custom-select" name="status">
                            <option disabled selected="">Select Post Status</option>
                            <option value="draft">Draft</option>
                            <option value="publish">Publish</option>
                        </select>
                    </div>
                </div>
                <!-- /status -->
            </div>
            <!-- .card-body -->
        </div>
        <!-- ./card -->
    </div> <!-- end col-12 -->
</div>
<!-- /end row -->