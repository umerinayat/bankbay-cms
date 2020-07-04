@extends('layouts.master')

@section('page-title')
    Add New Product
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Add New Product </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Add New</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form action="{{route('product.store')}}" method="POST">
    
        @include('products.fields')

        <button type="submit" class="btn btn-success">Add</button>
    
    </form>



@endsection

@section('extra-scripts')
<script> 

    var addNewProductFieldBtn = $('#addProductFieldBtn');
    var productsFieldCon = $('#productFieldsCon');

    var fieldCount = 0;

    var handleAddNewProductField = function (event) {
        event.preventDefault();
        productsFieldCon.append(createNewProductFieldHtml());

        return false;
    }

    var createNewProductFieldHtml = function () 
    {


        ++fieldCount;
       
        var html = `
            <div class="form-group row">
                <div class="col-md-2">
                    <input class="form-control" type="text" name="customFieldsNames[field-${fieldCount}]">
                </div>
                <div class="col-md-5">
                    <input class="form-control" type="text" name="customFieldsValues[field-${fieldCount}]">
                </div>
                <div class="col-md-1 mt-2">
                    <div class="form-check">
                        <input class="form-check-input" id="is-listing-${fieldCount}" name="customFieldsOptions[field-${fieldCount}][is-listing]" type="checkbox" >
                        <label class="form-check-label" for="is-listing-${fieldCount}">
                           Is Listing?
                        </label>
                    </div>
                </div>
                <div class="col-md-1 mt-2">
                    <div class="form-check">
                        <input class="form-check-input" id="is-filter-${fieldCount}" name="customFieldsOptions[field-${fieldCount}][is-filter]" type="checkbox" >
                        <label class="form-check-label" for="is-filter-${fieldCount}">
                           Is Filter?
                        </label>
                    </div>
                </div>
            </div>
        `;

        return html;
    }

    addNewProductFieldBtn.on('click', handleAddNewProductField);
 
</script>
@endsection