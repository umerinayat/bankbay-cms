<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- select product category -->
                <div class="form-group row mb-3">
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
            
                <!-- Filter Name -->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Filter Name *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="" placeholder="Filter name">
                    </div>
                </div>
                <!-- /Filter Name -->

                <!-- filters options -->
                <div class="form-group">
                    <span>Filter Options</span>
                </div>
               
                    <div class="form-group row">
                        <div class="col-sm-2">
                             <!--  is_product_category -->
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="is_product_category" id="is_product_category">
                                    <label class="custom-control-label" for="is_product_category">Is Product Categories</label>
                                </div>
                             <!--  is_product_category -->
                        </div>
                        <div class="col-sm-2">
                            <!--  is_vendor -->
                            <div class="custom-control custom-checkbox mb-3 ">
                                    <input type="checkbox" class="custom-control-input" name="is_vendor" id="is_vendor">
                                    <label class="custom-control-label" for="is_vendor">Is Vendors</label>
                                </div>
                             <!--  is_vendor -->
                        </div>
                </div>
                <!-- /filters options -->

                <!-- custom filters fields -->

                <div>
                    <div id="productFilterFieldsCon"></div>
                    <button id="addProductFilterFieldBtn" class="btn btn-success">Add New Field</button>
                </div>
                
                <!-- /custom filters fields -->


            </div>
            <!-- .card-body -->
        </div>
        <!-- ./card -->
    </div> <!-- end col-12 -->
</div>
<!-- /end row -->