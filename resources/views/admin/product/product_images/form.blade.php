@extends('admin.layout')
@section('page_title', 'Product')
@section('product_active', 'active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Product Image</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">Add Product Image</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-lg-10">
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

                        <div class="row">
                            @forelse ($product_images as $item)
                                <div class="col-md-3 mb-5">
                                    <img src="{{ asset('backend_images/' . $item->image) }}" style="width: 100%"
                                        alt="" srcset="">
                                    <p class="mt-2">
                                        <a href="{{ route('admin.product.images.delete', ['id' => $item->id]) }}"
                                            class="btn-sm btn-warning">Delete Image</a>
                                    </p>
                                </div>
                            @empty
                            @endforelse

                        </div>

                        <div>
                            <form action="{{ route('admin.product.images.submit') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                @if (isset($product) && !empty($product))
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                @endif

                                <div class="mb-3">
                                    <label>Product Images</label>
                                    <input class="form-control" type="file" name="image[]" multiple id="image">
                                    @error('image.*')
                                        @foreach ($errors->get('image.*') as $error)
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @endforeach
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <img src="" alt="" srcset="" id="showImage" style="width: 15%;">
                                </div>



                                <div>
                                    <button class="btn btn-primary btn-sm" type="submit">Submit form</button>
                                    <a href="{{route('admin.product.list')}}"
                                        class="btn btn-success btn-sm">Back</a>
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
