@extends('admin.layout')
@section('page_title', 'Product')
@section('product_active', 'active')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Product</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card bg-dark py-3 text-white">
                    <div class="card-body">
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div>
                            <form id="productSaveform" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ isset($product) ? $product->id : '' }}" name="id">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label>Product Name</label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ isset($product) ? $product->name : old('name') }}"
                                            placeholder="Product Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label>Product Slug</label>
                                        <input class="form-control" type="text" name="slug"
                                            value="{{ isset($product) ? $product->slug : old('slug') }}"
                                            placeholder="Product Slug">
                                        <span class="text-danger" id="slug_error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label>Brand Name</label>
                                        <select class="form-select" aria-label="Default select example" id="brand"
                                            name="brand">
                                            <option selected disabled>Select Brand</option>
                                            @foreach ($brand as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ isset($product) ? ($product->brand == $item->id ? 'selected' : '') : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="brand_error"></span>

                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label>Product Category</label>
                                        <select class="form-select" aria-label="Default select example" id="category_id"
                                            name="category_id">
                                            <option value="0">Select Department</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ isset($product) ? ($product->category_id == $item->id ? 'selected' : '') : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="category_id_error"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label>Product Image</label>
                                        <input class="form-control" type="file" name="image" id="image"
                                            placeholder="Category Image">
                                        <span class="text-danger" id="image_error"></span>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <img src="{{ isset($product) ? asset('backend_images/' . $product->image) : '' }}"
                                            alt="" srcset="" id="showImage" style="width: 20%;">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" id="keywords"
                                        value="{{ isset($product) ? $product->keywords : old('keywords') }}"
                                        placeholder="Product Keywords">
                                    <span class="text-danger" id="keywords_error"></span>
                                </div>
                                <div class="mb-4">
                                    <label>Short Description</label>
                                    <textarea class="form-control" type="text" rows="5" name="short_description" id="short_description"
                                        placeholder="Product Short Description"> {{ isset($product) ? $product->short_description : old('short_description') }} </textarea>
                                    <span class="text-danger" id="short_description_error"></span>
                                </div>
                                <div class="mb-4">
                                    <label>Long Description</label>
                                    <textarea class="form-control" id="long_description" type="text" rows="5" name="long_description"
                                        id="long_description" placeholder="Product Long Description"> {{ isset($product) ? $product->long_description : old('long_description') }} </textarea>
                                    <span class="text-danger" id="long_description_error"></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label>Lead Time</label>
                                        <input class="form-control" type="text" name="lead_time" id="lead_time"
                                            value="{{ isset($product) ? $product->lead_time : old('lead_time') }}"
                                            placeholder="Lead Time">
                                        <span class="text-danger" id="lead_time_error"></span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label>Product Tax</label>
                                        <input class="form-control" type="text" name="tax" id="tax"
                                            value="{{ isset($product) ? $product->tax : old('tax') }}"
                                            placeholder="Product Tax">
                                        <span class="text-danger" id="tax_error"></span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label>Tax Type</label>
                                        <input class="form-control" type="text" name="tax_type" id="tax_type"
                                            value="{{ isset($product) ? $product->tax : old('tax_type') }}"
                                            placeholder="Product Tax Type">
                                        <span class="text-danger" id="tax_type_error"></span>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label>Have Product Attribute</label>
                                        <select class="form-select" aria-label="Default select example"
                                            id="have_attribute" name="have_attribute">
                                            <option value="0"
                                                {{ isset($product->have_attribute) && $product->have_attribute == 0 ? 'selected' : (old('have_attribute') == 0 ? 'selected' : null) }}
                                                selected>No</option>
                                            <option value="1"
                                                {{ isset($product->have_attribute) && $product->have_attribute == 1 ? 'selected' : (old('have_attribute') == 1 ? 'selected' : null) }}>
                                                Yes</option>
                                        </select>
                                        <span class="text-danger" id="have_attribute_error"></span>
                                    </div>
                                </div>
                                @php
                                @endphp
                                <div id="main_attribute_div">
                                    <h5 class="my-3 bg-warning py-3 text-center rounded">Product Attributes</h5>
                                    <hr>
                                    {{-- start product attributes --}}
                                    {{-- <input type="hidden" value="{{ isset($product_attr) ? $product_attr->id : '' }}" name="id"> --}}
                                    {{-- <input type="hidden" name="product_id" value="{{isset($product) ? $product->id : old('product_id')}}"> --}}
                                    @if (isset($productAttData) && count($productAttData) > 0)
                                        @php
                                            $edit_loop_count = 0;
                                        @endphp
                                        <div id="product_attr_box">
                                            @foreach ($productAttData as $productAttItem)
                                                @php
                                                    $edit_loop_count++;
                                                    $loop_error_id = $edit_loop_count - 1;
                                                @endphp
                                                <div class="card bg-success p-3 text-dark"
                                                    id="product_arr_{{ $edit_loop_count }}">
                                                    <div class="row">
                                                        <input type="hidden" name="product_attrID[]"
                                                            value="{{ isset($productAttItem) ? $productAttItem->id : old('sku') }}">
                                                        <div class="col-md-4 mb-4">
                                                            <label>Product SKU</label>
                                                            <input class="form-control" type="text" name="sku[]"
                                                                id="sku.{{$loop_error_id}}"
                                                                value="{{ isset($productAttItem) ? $productAttItem->sku : old('sku') }}"
                                                                placeholder="Product SKU">
                                                                <span class="text-dark" id="sku_{{$loop_error_id}}_error"></span>
                                                            </div>
                                                        <div class="col-md-4 mb-4">
                                                            <label>Product MRP</label>
                                                            <input class="form-control" type="text" id="mrp.{{$loop_error_id}}" name="mrp[]"
                                                                value="{{ isset($productAttItem) ? $productAttItem->mrp : old('mrp') }}"
                                                                placeholder="Product MRP">
                                                                <span class="text-dark" id="mrp_{{$loop_error_id}}_error"></span>

                                                        </div>
                                                        <div class="col-md-4 mb-4">
                                                            <label>Product Price</label>
                                                            <input class="form-control" type="text" id="price.{{$loop_error_id}}" name="price[]"
                                                                value="{{ isset($productAttItem) ? $productAttItem->price : old('price') }}"
                                                                placeholder="Product Price">
                                                                <span class="text-dark" id="price_{{$loop_error_id}}_error"></span>
                                                        </div>
                                                        <div class="col-md-4 mb-4">
                                                            <label>Product Size</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example" id="size_id.{{$loop_error_id}}"
                                                                name="size_id[]" data-id="size_id">
                                                                <option value="0">Select Size</option>
                                                                @foreach ($size as $item)
                                                                    <option value="{{ $item->id }}"
                                                                        {{ isset($productAttItem) ? ($productAttItem->size_id == $item->id ? 'selected' : '') : (old('size_id') == $item->id ? 'selected' : null) }}>
                                                                        {{ $item->size }}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="text-dark" id="size_id_{{$loop_error_id}}_error"></span>
                                                            @if ($errors->has('size_id'))
                                                                <span class="text-danger">
                                                                    <strong>{{ $errors->first('size_id') }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="col-md-4 mb-4">
                                                        <label>Product Color</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example" id="color_id.{{$loop_error_id}}"
                                                            name="color_id[]" data-id="color_id">
                                                            <option value="0">Select Size</option>
                                                            @foreach ($color as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ isset($productAttItem) ? ($productAttItem->color_id == $item->id ? 'selected' : '') : (old('color_id') == $item->id ? 'selected' : null) }}>
                                                                    {{ $item->color }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-dark" id="color_id_{{$loop_error_id}}_error"></span>
                                                        @if ($errors->has('color_id'))
                                                            <span class="text-danger">
                                                                <strong>{{ $errors->first('color_id') }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <label>Product QTY</label>
                                                    <input class="form-control" type="text" id="qty.{{$loop_error_id}}" name="qty[]"
                                                        value="{{ isset($productAttItem) ? $productAttItem->qty : old('qty') }}"
                                                        placeholder="Product qty">
                                                        <span class="text-dark" id="qty_{{$loop_error_id}}_error"></span>

                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <label>Product Image</label>
                                                    <input class="form-control" type="file" name="atimage[]"
                                                        id="image" placeholder="Category Image">
                                                </div>
                                                <div class="col-md-4 mb-4">
                                                    <img src="{{ isset($productAttItem) ? asset('backend_images/' . $productAttItem->attr_image) : '' }}"
                                                        alt="" srcset="" id="showImage"
                                                        style="width: 15%;">
                                                </div>
                                                @if ($edit_loop_count == 1)
                                                    <div class="col-md-3" style="margin-top: 25px;">
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                                            id="add_more">Add More</a>
                                                    </div>
                                                @else
                                                    <div class="col-md-3" style="margin-top: 30px;"> <a
                                                            href="javascript:void(0)"
                                                            class="btn btn-sm btn-danger" id="remove"
                                                            onclick="remove_more({{ $edit_loop_count }},{{ $productAttItem->id }})">Remove</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div id="product_attr_box">
                                    <div class="card bg-success p-3 text-dark" id="product_arr_1">
                                        <input type="hidden" name="product_attrID[]">
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label>Product SKU</label>
                                                <input class="form-control" type="text" id="sku.0"
                                                    name="sku[]" value="" placeholder="Product SKU">
                                                <span class="text-dark" id="sku_0_error"></span>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label>Product MRP</label>
                                                <input class="form-control" type="text" id="mrp.0"
                                                    name="mrp[]" value="" placeholder="Product MRP">
                                                    <span class="text-dark" id="mrp_0_error"></span>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label>Product Price</label>
                                                <input class="form-control" type="text" name="price[]"
                                                    id="price.0" value="" placeholder="Product Price">
                                                <span class="text-dark" id="price_0_error"></span>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label>Product Size</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    id="size_id.0" data-id="size_id" name="size_id[]">
                                                    <option value="0">Select Size</option>
                                                    @foreach ($size as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ isset($product_attr) ? ($product_attr->size_id == $item->id ? 'selected' : '') : (old('size_id') == $item->id ? 'selected' : null) }}>
                                                            {{ $item->size }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-dark" id="size_id_0_error"></span>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label>Product Color</label>
                                            <select class="form-select" aria-label="Default select example"
                                                id="color_id.0" data-id="color_id" name="color_id[]">
                                                <option value="0">Select Size</option>
                                                @foreach ($color as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ isset($product_attr) ? ($product_attr->color_id == $item->id ? 'selected' : '') : (old('color_id') == $item->id ? 'selected' : null) }}>
                                                        {{ $item->color }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-dark" id="color_id_0_error"></span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label>Product QTY</label>
                                        <input class="form-control qty" type="text" id="qty.0" name="qty[]"
                                            value="" placeholder="Product qty">
                                            <span class="text-dark" id="qty_0_error"></span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label>Product Image</label>
                                        <input class="form-control" type="file" name="atimage[]"
                                            id="atimage.0" placeholder="Category Image">
                                            <span class="text-dark" id="atimage_0_error"></span>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <img src="{{ isset($product_attr) ? asset('backend_images/' . $product_attr->attr_image) : '' }}"
                                            alt="" srcset="" id="showImage"
                                            style="width: 15%;">
                                    </div>
                                    <div class="col-md-3" style="margin-top: 25px;">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                            id="add_more">Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- end product attributes --}}

                </div>
                <div>
                    <button class="btn btn-primary btn-sm" type="submit" id="btnSubmit">Submit</button>
                    <a href="{{ route('admin.product.list') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- end row -->
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@section('script')
<script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
<script>
    $(document).ready(function() {

        // $("#main_attribute_div").hide();

        if ({{ $countAttribute }} > 1) {
            // alert("OPlww");
            $("#main_attribute_div").show();
        } else {
            // alert("OPl");
            $("#main_attribute_div").hide();
        }


        $("#have_attribute").on('change', function() {
            $val = $(this).val();
            if ($val == 0) {
                $("#main_attribute_div").hide();
            } else {
                $("#main_attribute_div").show();
            }
        });
        var loop_count = {{ $countAttribute }};
        $("#add_more").click(function() {
            alert(loop_count);
            // var loop_count = $(this).data("id");
            loop_count++;
            var size_id_html = $("[data-id='size_id']").html();
            size_id_html = size_id_html.replace("selected", '');

            var color_id_html = $("[data-id='color_id']").html();
            color_id_html = color_id_html.replace("selected", '');


            var html = '<div class="card bg-success p-3 text-dark" id="product_arr_' + loop_count +
                '"><div class="row">';

            html +=
                '<div class="col-md-12 mb-4"><input class="form-control" type="hidden" name="product_attrID[]"></div>';

            html +=
                '<div class="col-md-4 mb-4"><label>Product SKU</label> <input class="form-control" type="text" name="sku[]" id="sku.'+(loop_count-1)+'" value="" placeholder="Product SKU"><span class="text-dark" id="sku_'+(loop_count-1)+'_error"></span></div>';
            html +=
                '<div class="col-md-4 mb-4"> <label>Product MRP</label> <input class="form-control" type="text" name="mrp[]" id="mrp.'+(loop_count-1)+'" value="" placeholder="Product MRP"><span class="text-dark" id="mrp_'+(loop_count-1)+'_error"></span> </div>';
            html +=
                '<div class="col-md-4 mb-4"> <label>Product Price</label> <input class="form-control" type="text" name="price[]" id="price.'+(loop_count-1)+'" value="" placeholder="Product Price"><span class="text-dark" id="price_'+(loop_count-1)+'_error"></span> </div>';

            html +=
                '<div class="col-md-4 mb-4"> <label>Product Size</label>  <select class="form-select" aria-label="Default select example" id="size_id.'+(loop_count-1)+'" name="size_id[]"> ' +
                size_id_html + ' </select> <span class="text-dark" id="size_id_'+(loop_count-1)+'_error"></span> </div>';
            html +=
                '<div class="col-md-4 mb-4"> <label>Product Color</label> <select class="form-select" aria-label="Default select example" id="color_id.'+(loop_count-1)+'" name="color_id[]"> ' +
                color_id_html + ' </select> <span class="text-dark" id="color_id_'+(loop_count-1)+'_error"></span> </div>';
            html +=
                '<div class="col-md-4 mb-4"> <label>Product QTY</label> <input class="form-control" type="text" name="qty[]" id="qty.'+(loop_count-1)+'" value="" placeholder="Product qty"> <span class="text-dark" id="qty_'+(loop_count-1)+'_error"></span></div>';
            html +=
                '<div class="col-md-4 mb-4"> <label>Product Image</label> <input class="form-control" type="file" name="atimage[]" id="image" placeholder="Category Image"> </div>';
            html +=
                '<div class="col-md-3" style="margin-top: 30px;"> <a href="javascript:void(0)" class="btn btn-sm btn-danger" id="remove" onclick="remove_more(' +
                loop_count + ')">Remove</a> </div>';
            html += '</div></div>';
            $("#product_attr_box").append(html);
        });
    });

    function remove_more(loop_count, id) {

        // Show a confirmation box
        var isConfirmed = confirm('Are you sure you want to remove this item?');

        if (id == undefined) {
            if (isConfirmed) {
                $('#product_arr_' + loop_count).remove();
            }
        } else {

            $.ajax({
                type: "GET",
                url: "{{ route('admin.product.attr-delete') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        swal(response.message, {
                            icon: "success",
                        });
                        // setTimeout(() => {
                        //     location.reload();
                        // }, 2000);
                    } else {
                        alert(response.message);
                    }
                }
            });

            if (isConfirmed) {
                $('#product_arr_' + loop_count).remove();
            }
        }
    }


    $(document).ready(function() {

        CKEDITOR.replace('long_description', {
            height: 250,
        });

        $("#image").change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#showImage").attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
<script>
    $("#productSaveform").submit(function(e) {
        e.preventDefault();

        const fd = new FormData(this);

        $.ajax({
            url: "{{ route('admin.product.submit') }}",
            method: 'post',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                $("#btnSubmit").html("Please Wait");
                $('#btnSubmit').attr('disabled', true);
            },
            error: function(xhr) {
                // console.log(xhr);
                $("[id$='_error']").html('');
                $("#btnSubmit").html("Submit");
                $('#btnSubmit').attr('disabled', false);


                $.each(xhr.responseJSON.errors, function(key, value) {
                    console.log(key);
                    // alert(key);
                    if (key.includes('.')) {
                        // Replace dots with underscores in the key
                        let modifiedKey = key.replace(/\./g, '_');

                        // Construct the error field ID
                        let errorFieldId = modifiedKey + '_error';

                        $('#' + errorFieldId).html('<span style="color:black">' + value +
                            '</span');
                    } else {
                        // For non-array fields
                        $('#' + key + '_error').html('<span style="color:red">' + value +
                            '</span');
                    }
                });


                $("#btnSubmit").html("Register");
                $('#btnSubmit').attr('disabled', false);
            },
            success: function(data) {
                console.log(data);
                if (data.success == 200) {
                    swal(data.message, "Thank You :)", "success");
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    alert('Something went wrong');
                }
            }

        });
    });
</script>
@endsection
