@extends('layouts.master')

@section('page-title')
    Add New Product Filter
@endsection

@section('main-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Add New Product Filter</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Add New Filter</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form action="{{route('productFilter.store')}}" method="POST">
    
        @include('products.filters.fields')

        <button type="submit" class="btn btn-success">Add</button>
    
    </form>



@endsection

@section('extra-scripts')
<script> 

    var productFilterFieldsCon = $('#productFilterFieldsCon');
    var addProductFilterFieldBtn = $('#addProductFilterFieldBtn');

    var fieldCount = 0;
    var subfieldCount = 0;

    var handleAddNewProductFilterField = function (event) {
        event.preventDefault();
        productFilterFieldsCon.append(createNewProductFieldHtml());

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
                    <br>
                    <div class="form-group" id="field-${fieldCount}">
                    
                    </div>
                </div>
               
            </div>
            <div class="form-group row">
                <div class="col-md-2 offset-md-5 text-right">
                    <button class="btn btn-sm btn-info add-values-btn" onclick="addMoreValues(event)" data-field="field-${fieldCount}"> Add more values </button>
                </div>
            </div>
        `;

        return html;
    }

    addProductFilterFieldBtn.on('click', handleAddNewProductFilterField);


    function addMoreValues ( event ) {
        event.preventDefault();
        
        var btn = event.srcElement;
        var fieldsGroupId = btn.getAttribute('data-field');
        console.log(fieldsGroupId);
        var fieldsGroup = document.getElementById(fieldsGroupId);

        var inputEl = document.createElement('input');
        inputEl.classList.add('form-control');
        
        var id = makeid(5);
        inputEl.setAttribute('name', `customFieldsMoreValues[${fieldsGroupId}][${id}]`);

        inputEl.setAttribute('type', 'text');
        var brEl = document.createElement('br');
        

        fieldsGroup.append(inputEl);
        fieldsGroup.append(brEl);


        return false;
    }

    function makeid(length) {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
   return result;
}

</script>

<script>
    // http://127.0.0.1:8001/product-filter/getFilter/1
    // product_categories_id

    // #is_product_category
    // #is_vendor

    var $productCategories = $('#product_categories_id');
    var $isProductCategory = $('#is_product_category');
    var $isVendor = $('#is_vendor');
    var $name = $('#name');

    


    $productCategories.on('change', function ( e ) {
        var productId = $productCategories.val();

        axios.get('http://clients.umerinayat.com/harbied/bankbay-cms/product-filter/getFilter/' + productId)
        .then((response) => {
            if ( response.data[0] != undefined) {
                productFilterFieldsCon.empty();
                genFiltersFields(response.data)
            } else {
                productFilterFieldsCon.empty();
            }
           
        });


    });


    function genFiltersFields ( data ) {

        console.log(data[0]);

        var productFilter = data[0];

        var productFilterOption = productFilter.product_filter_option;
        var filterControls = productFilter.filter_controls;

        $name.val(productFilter.name);

        if ( productFilterOption.is_product_category ) {
            $isProductCategory.prop('checked', true)
        } else 
        {
            $isProductCategory.prop('checked', false)
        }

        if ( productFilterOption.is_vendor  ) {
            $isVendor.prop('checked', true)
        } else {
            $isVendor.prop('checked', false)
        }

        var html = genFilterDataHtml( filterControls );

       
        productFilterFieldsCon.append(html);
       
    

    }


    function genFilterDataHtml ( filterControls ) {

        var html = ``;

        for ( i = 0; i < filterControls.length; i++ ) {

            var filterControl = filterControls[i];

    
            var filterOptions = filterControl.filter_control_options;


            if ( filterControl.type == 'select' ) {
                // multi value

                html += `<div class="form-group row">`;

                html += `<div class="col-md-2">
                        <input class="form-control" type="text" value="${filterControl.name}" >
                    </div>`;

                html += `<div class="col-md-5">
                        <input class="form-control" type="text" value="${filterOptions[0].value}"><br>`;

                for ( j = 0; j < filterOptions.length; j++ ) {

                    var filterOption = filterOptions[j];

                    if ( j > 0 ) {
                            html += `
                            <div class="form-group" id="test-test">
                                <input class="form-control" type="text" value="${filterOption.value}">
                            </div><br>`;
                    } 

                    console.log(filterOption)

                }   

                html += `</div></div>`;
                

            } else {
                // single value
                html += `<div class="form-group row">`;

                html += `<div class="col-md-2">
                        <input class="form-control" type="text" value="${filterControl.name}" >
                    </div>`;

                html += `<div class="col-md-5">
                            <input class="form-control" type="text" value="${filterOptions[0].value}">
                        </div>
                    </div>`;
                
            }

        }


       
                    
        html +=  `
            <div class="form-group row">
                <div class="col-md-2 offset-md-5 text-right">
                    <button class="btn btn-sm btn-info add-values-btn"> Add more values </button>
                </div>
            </div>
        `;

        return html;
    }


</script>

@endsection