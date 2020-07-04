<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Category Name -->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Name</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value=""
                            placeholder="Category category name">
                    </div>
                </div>

                <!-- category type -->
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
                <!-- /category type -->

                <!-- /Category Name -->
                <!-- slug -->
                <div class="form-group row">
                    <label for="slug" class="col-md-2 col-form-label">Slug</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="slug" id="slug" value=""
                            placeholder="Enter category slug for URL">
                    </div>
                </div>
                <!-- /slug -->
                <!-- order -->
                <div class="form-group row">
                    <label for="order" class="col-md-2 col-form-label">Order</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" name="order" id="order" value="1"
                            placeholder="Enter category order">
                    </div>
                </div>
                <!-- /order -->
            </div>
            <!-- .card-body -->
        </div>
        <!-- ./card -->
    </div> <!-- end col-12 -->
</div>
<!-- /end row -->