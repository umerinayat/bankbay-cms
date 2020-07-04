<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- select product category -->
                <div class="form-group row mb-0">
                    <label class="col-md-2 col-form-label">Product Category *</label>
                    <div class="col-md-10">
                        <select class="custom-select" id="product_categories_id" name="product_categories_id">
                            <option disabled selected="">Select Product Category</option>
                                @foreach( $productCategories as $pCat )
                                    <option value="{{$pCat->id}}">{{$pCat->name}} - {{ucfirst($pCat->type)}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <!-- /select product category -->
                <!-- select vendor -->
                <div class="form-group row mt-3">
                        <label class="col-md-2 col-form-label">Vendor *</label>
                        <div class="col-md-10">
                            <select class="custom-select" name="vendor_id">
                                <option disabled selected="">Select Vendor</option>
                                @foreach( $vendors as $vendor )
                                    <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <!-- /select vendor -->
                <!-- Product Name -->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Name *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="" placeholder="Product name">
                    </div>
                </div>
                <!-- /Product Name -->
                <!-- sub_heading -->
                    <div class="form-group row">
                    <label for="sub_heading" class="col-md-2 col-form-label">Sub Heading</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="sub_heading" id="sub_heading" value="" placeholder="Product sub heading">
                        </div>
                    </div>
                <!-- /sub_heading -->
                <!--  price -->
                 <div class="form-group row">
                    <label for="price" class="col-md-2 col-form-label">Price *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="price" id="price" value="" placeholder="Product price">
                    </div>
                </div>
                <!-- / Price -->
                <!--  old price -->
                <div class="form-group row">
                    <label for="old_price" class="col-md-2 col-form-label">Old Price *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="old_price" id="old_price" value="" placeholder="Product old price">
                    </div>
                </div>
                <!-- /old Price -->
                <!-- currency -->
                <div class="form-group row">
                    <label for="currency" class="col-md-2 col-form-label">Currency *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="currency" id="currency" value="" placeholder="Currency">
                    </div>
                </div>
                 <!-- /currency -->
                <!-- product_url -->
                <div class="form-group row">
                    <label for="product_url" class="col-md-2 col-form-label">Product URL *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="product_url" id="product_url" value="" placeholder="Product URL">
                    </div>
                </div>
                <!-- /product_url -->

                <!-- custom fields -->
                <div>
                    <div id="productFieldsCon"></div>
                    <button id="addProductFieldBtn" class="btn btn-success">Add New Field</button>
                </div>
                <!-- custom fields -->
                
                <!--  Description -->
                   <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">Description</label>
                    <div class="col-md-10">
                        <textarea name="description" id="description" placeholder="Write Product description..." cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <!-- /Description -->
                <!-- featured_image -->
                <div class="form-group row mt-4">
                    <label for="featured_image" class="col-md-2 col-form-label">Featured Image</label>
                    <div class="col-md-10 mt-2">
                        <input  type="file" name="featured_image" id="featured_image">
                    </div>
                </div>
                <!-- / featured_image -->
                <!--  is_popular -->
                <div class="custom-control custom-checkbox mb-3 mt-4">
                    <input type="checkbox" class="custom-control-input" name="is_popular" id="is_popular">
                    <label class="custom-control-label" for="is_popular">Is Popular</label>
                </div>
                
                <!-- /is_popular -->
                 <!--  is_publish -->
                 <div class="custom-control custom-checkbox mb-3 mt-4">
                    <input type="checkbox" class="custom-control-input" name="is_publish" id="is_publish">
                    <label class="custom-control-label" for="is_publish">Is Publish</label>
                </div>
                <!-- /is_publish -->
            
            </div>
            <!-- .card-body -->
        </div>
        <!-- ./card -->
    </div> <!-- end col-12 -->
</div>
<!-- /end row -->