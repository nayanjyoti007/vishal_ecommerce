@extends('admin.layout')
@section('page_title','Brand')
@section('brand_active','active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Brand</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">Add Brand</li>
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
                            <form action="{{ route('admin.brand.submit') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{isset($brand) ? $brand->id : ''}}" name="id">
                                
                               <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label>Brand Name</label>
                                    <input class="form-control" type="text" name="name" value="{{isset($brand) ? $brand->name : old('name')}}" placeholder="Brand Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-4">
                                <label>Brand Slug</label>
                                <input class="form-control" type="text" name="slug" value="{{isset($brand) ? $brand->slug : old('slug')}}" placeholder="Brand Slug">
                                @if ($errors->has('slug'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                               </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                            <label>Brand Image</label>
                            <input class="form-control" type="file" name="image" id="image" placeholder="Brand Image">
                            @if ($errors->has('image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-6 mb-4">
                        <img src="{{ isset($brand) ? asset('backend_images/' . $brand->image) : '' }}"
                           alt="" srcset="" id="showImage" style="width: 20%;">
                     </div>
                      </div>


                    <div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                        <a href="{{route('admin.brand.list')}}" class="btn btn-success btn-sm">Back</a>
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
