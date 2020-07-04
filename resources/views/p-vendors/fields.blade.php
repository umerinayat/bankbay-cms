<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Vendor Name -->
                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Vendor Name *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="" placeholder="Vendor name">
                    </div>
                </div>
                <!-- /Vendor Name -->
                 <!-- Vendor url -->
                 <div class="form-group row">
                    <label for="vendor_url" class="col-md-2 col-form-label">Vendor URL *</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="vendor_url" id="vendor_url" value="" placeholder="Vendor URL">
                    </div>
                </div>
                <!-- /Vendor url -->
                     <!-- Vendor phone_number -->
                     <div class="form-group row">
                    <label for="phone_number" class="col-md-2 col-form-label">Phone number</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="phone_number" id="phone_number" value="" placeholder="Vendor phone number">
                    </div>
                </div>
                <!-- /Vendor phone_number -->
                <!--  Description -->
                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">Description</label>
                    <div class="col-md-10">
                        <textarea name="description" id="description" placeholder="Write vendor description..." cols="30" rows="3" class="form-control"></textarea>

                    </div>
                </div>
                <!-- /Description -->
                      <!-- logo -->
                <div class="form-group row mt-4">
                    <label for="logo" class="col-md-2 col-form-label">Logo Image</label>
                    <div class="col-md-10 mt-2">
                        <input  type="file" name="logo" id="logo">
                    </div>
                </div>
                <!-- / logo -->
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