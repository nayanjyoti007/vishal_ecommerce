@extends('admin.layout')
@section('page_title', 'Product')
@section('product_active', 'active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    

                    @if(isset($product_attr) && !empty($product_attr))
                    <h4 class="mb-sm-0">Update Product Attribute</h4>
                @else
                <h4 class="mb-sm-0">Add Product Attribute</h4>
                @endif

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">@if(isset($product_attr) && !empty($product_attr))
                                Update Product Attribute
                            @else
                            Add Product Attribute
                            @endif</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
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
                            <form action="{{ route('admin.product.attribute.submit') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{ isset($product_attr) ? $product_attr->id : '' }}"
                                    name="id">

                                    <input type="hidden" name="product_id" value="{{isset($product) ? $product->id : old('product_id')}}">

                                
                                    <div class="mb-4">
                                        <label>Product Name</label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ isset($product) ? $product->name : old('name') }}"
                                            placeholder="Product Name" readonly>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @enderror
                                </div>


                                <div class="mb-4">
                                    <label>Product SKU</label>
                                    <input class="form-control" type="text" name="sku"
                                        value="{{ isset($product_attr) ? $product_attr->sku : old('sku') }}"
                                        placeholder="Product SKU">
                                    @if ($errors->has('sku'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('sku') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                                <div class="mb-4">
                                    <label>Product MRP</label>
                                    <input class="form-control" type="text" name="mrp"
                                        value="{{ isset($product_attr) ? $product_attr->mrp : old('mrp') }}"
                                        placeholder="Product MRP">
                                    @if ($errors->has('mrp'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('mrp') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mb-4">
                                <label>Product Price</label>
                                <input class="form-control" type="text" name="price"
                                    value="{{ isset($product_attr) ? $product_attr->price : old('price') }}"
                                    placeholder="Product Price">
                                @if ($errors->has('price'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <label>Product Size</label>
                            <select class="form-select" aria-label="Default select example" id="size_id"
                                name="size_id">
                                <option disabled selected>Select Size</option>
                                @foreach ($size as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($product_attr) ? ($product_attr->size_id == $item->id ? 'selected' : '') :  (old('size_id') == $item->id ? "selected" : null) }}>
                                        {{ $item->size }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('size_id'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('size_id') }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label>Product Color</label>
                        <select class="form-select" aria-label="Default select example" id="color_id"
                            name="color_id">
                            <option disabled selected>Select Size</option>
                            @foreach ($color as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($product_attr) ? ($product_attr->color_id == $item->id ? 'selected' : '') : (old('color_id') == $item->id ? "selected" : null) }}>
                                    {{ $item->color }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('color_id'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('color_id') }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="mb-4">
                    <label>Product QTY</label>
                    <input class="form-control" type="text" name="qty"
                        value="{{ isset($product_attr) ? $product_attr->qty : old('price') }}"
                        placeholder="Product qty">
                    @if ($errors->has('qty'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('qty') }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="mb-4">
                <label>Product Image</label>
                <input class="form-control" type="file" name="image" id="image" placeholder="Category Image">
                @if ($errors->has('image'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @enderror
        </div>

        <div class="mb-4">
            <img src="{{ isset($product_attr) ? asset('backend_images/' . $product_attr->attr_image) : '' }}"
                alt="" srcset="" id="showImage" style="width: 15%;">
        </div>





        <div>
            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
            <a href="{{route('admin.product.attribute.list',['id' => $product->id])}}" class="btn btn-success btn-sm">Back</a>
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

@section('script')
<script>
    $(document).ready(function() {

        $("#image").change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#showImage").attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

    });
</script>
@endsection
