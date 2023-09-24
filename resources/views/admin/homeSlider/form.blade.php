@extends('admin.layout')
@section('page_title','Home Slider')
@section('homeslider_active','active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Home Slider</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">Home Slider</li>
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
                            <form action="{{ route('admin.homeslider.submit') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{isset($slider) ? $slider->id : ''}}" name="id">
                                
                               <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label>Heading</label>
                                    <input class="form-control" type="text" name="heading" value="{{isset($slider) ? $slider->heading : old('heading')}}" placeholder="Heading">
                                    @if ($errors->has('heading'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('heading') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-4">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="{{isset($slider) ? $slider->title : old('title')}}" placeholder="Title">
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                               </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                            @if ($errors->has('image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-6 mb-4">
                        <img src="{{ isset($slider) ? asset('backend_images/' . $slider->image) : '' }}"
                           alt="" srcset="" id="showImage" style="width: 20%;">
                     </div>
                      </div>


                    <div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                        <a href="{{route('admin.homeslider.list')}}" class="btn btn-success btn-sm">Back</a>
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
