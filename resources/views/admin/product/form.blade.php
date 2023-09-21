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
                  <form action="{{ route('admin.product.submit') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" value="{{ isset($product) ? $product->id : '' }}" name="id">
                     

                     <div class="row">
                        <div class="col-md-6 mb-4">
                           <label>Product Name</label>
                           <input class="form-control" type="text" name="name"
                              value="{{ isset($product) ? $product->name : old('name') }}"
                              placeholder="Product Name">
                           @if ($errors->has('name'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('name') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                           <label>Product Slug</label>
                           <input class="form-control" type="text" name="slug"
                              value="{{ isset($product) ? $product->slug : old('slug') }}"
                              placeholder="Product Slug">
                           @if ($errors->has('slug'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('slug') }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mb-4">
                           <label>Brand Name</label>
                           <select class="form-select" aria-label="Default select example" id="brand"
                           name="brand">
                           <option disabled selected>Select Brand</option>
                           @foreach ($brand as $item)
                           <option value="{{ $item->id }}"
                           {{ isset($product) ? ($product->brand == $item->id ? 'selected' : '') : '' }}>
                           {{ $item->name }}</option>
                           @endforeach
                        </select>
                           @if ($errors->has('brand'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('brand') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                           <label>Product Category</label>
                           <select class="form-select" aria-label="Default select example" id="category_id"
                              name="category_id">
                              <option disabled selected>Select Department</option>
                              @foreach ($category as $item)
                              <option value="{{ $item->id }}"
                              {{ isset($product) ? ($product->category_id == $item->id ? 'selected' : '') : '' }}>
                              {{ $item->name }}</option>
                              @endforeach
                           </select>
                           @if ($errors->has('category_id'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('category_id') }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 mb-4">
                           <label>Product Image</label>
                           <input class="form-control" type="file" name="image" id="image"
                              placeholder="Category Image">
                           @if ($errors->has('image'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('image') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                           <img src="{{ isset($product) ? asset('backend_images/' . $product->image) : '' }}"
                              alt="" srcset="" id="showImage" style="width: 20%;">
                        </div>
                     </div>
                     <div class="mb-4">
                        <label>Keywords</label>
                        <input class="form-control" type="text" name="keywords"
                           value="{{ isset($product) ? $product->keywords : old('keywords') }}"
                           placeholder="Product Keywords">
                        @if ($errors->has('keywords'))
                        <span class="text-danger">
                        <strong>{{ $errors->first('keywords') }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="mb-4">
                        <label>Short Description</label>
                        <textarea class="form-control" type="text" rows="5" name="short_description"
                           placeholder="Product Short Description"> {{ isset($product) ? $product->short_description : old('short_description') }} </textarea>
                        @if ($errors->has('short_description'))
                        <span class="text-danger">
                        <strong>{{ $errors->first('short_description') }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="mb-4">
                        <label>Long Description</label>
                        <textarea class="form-control" id="long_description" type="text" rows="5" name="long_description"
                           placeholder="Product Long Description"> {{ isset($product) ? $product->long_description : old('long_description') }} </textarea>
                        @if ($errors->has('long_description'))
                        <span class="text-danger">
                        <strong>{{ $errors->first('long_description') }}</strong>
                        </span>
                        @enderror
                     </div>

                     <div class="row">
                        <div class="col-md-4 mb-4">
                           <label>Lead Time</label>
                           <input class="form-control" type="text" name="lead_time"
                              value="{{ isset($product) ? $product->lead_time : old('lead_time') }}"
                              placeholder="Lead Time">
                           @if ($errors->has('lead_time'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('lead_time') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-4 mb-4">
                           <label>Product Tax</label>
                           <input class="form-control" type="text" name="tax"
                              value="{{ isset($product) ? $product->tax : old('tax') }}"
                              placeholder="Product Tax">
                           @if ($errors->has('tax'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('tax') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-4 mb-4">
                           <label>Tax Type</label>
                           <input class="form-control" type="text" name="tax_type"
                              value="{{ isset($product) ? $product->tax : old('tax_type') }}"
                              placeholder="Product Tax Type">
                           @if ($errors->has('tax_type'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('tax_type') }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3 mb-4">
                           <label>Is Promo</label>
                           <select class="form-select" aria-label="Default select example" id="is_promo"
                              name="is_promo">
                           <option value="2"
                           {{ isset($product->is_promo) && $product->is_promo == 2 ? 'selected' : (old('is_promo') == 2 ? 'selected' : null) }}
                           selected>No</option>
                           <option value="1"
                           {{ isset($product->is_promo) && $product->is_promo == 1 ? 'selected' : (old('is_promo') == 1 ? 'selected' : null) }}>
                           Yes</option>
                           </select>
                           @if ($errors->has('is_promo'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('is_promo') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-3 mb-4">
                           <label>Is Featured</label>
                           <select class="form-select" aria-label="Default select example" id="is_featured"
                              name="is_featured">
                           <option value="2"
                           {{ isset($product->is_featured) && $product->is_featured == 2 ? 'selected' : (old('is_featured') == 2 ? 'selected' : null) }}
                           selected>No</option>
                           <option value="1"
                           {{ isset($product->is_featured) && $product->is_featured == 1 ? 'selected' : (old('is_featured') == 1 ? 'selected' : null) }}>
                           Yes</option>
                           </select>
                           @if ($errors->has('is_featured'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('is_featured') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-3 mb-4">
                           <label>Is Discounted</label>
                           <select class="form-select" aria-label="Default select example" id="is_discounted"
                              name="is_discounted">
                           <option value="2"
                           {{ isset($product->is_discounted) && $product->is_discounted == 2 ? 'selected' : (old('is_discounted') == 2 ? 'selected' : null) }}
                           selected>No</option>
                           <option value="1"
                           {{ isset($product->is_discounted) && $product->is_discounted == 1 ? 'selected' : (old('is_discounted') == 1 ? 'selected' : null) }}>
                           Yes</option>
                           </select>
                           @if ($errors->has('is_discounted'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('is_discounted') }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-md-3 mb-4">
                           <label>Is Tranding</label>
                           <select class="form-select" aria-label="Default select example" id="is_tranding"
                              name="is_tranding">
                           <option value="2"
                           {{ isset($product->is_tranding) && $product->is_tranding == 2 ? 'selected' : (old('is_tranding') == 2 ? 'selected' : null) }}
                           selected>No</option>
                           <option value="1"
                           {{ isset($product->is_tranding) && $product->is_tranding == 1 ? 'selected' : (old('is_tranding') == 1 ? 'selected' : null) }}>
                           Yes</option>
                           </select>
                           @if ($errors->has('is_tranding'))
                           <span class="text-danger">
                           <strong>{{ $errors->first('is_tranding') }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
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
@section('script')
<script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
<script>
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
@endsection