@extends('admin.layout')
@section('page_title','Category')
@section('category_active','active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Category</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item">Add Category</li>
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
                            <form action="{{ route('admin.category.submit') }}" method="post" >
                                @csrf

                                <input type="hidden" value="{{isset($category) ? $category->id : ''}}" name="id">
                                <div class="mb-4">
                                    <input class="form-control" type="text" name="name" value="{{isset($category) ? $category->name : old('name')}}" placeholder="Category Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mb-4">
                                <input class="form-control" type="text" name="slug" value="{{isset($category) ? $category->slug_name : old('slug')}}" placeholder="Category Slug">
                                @if ($errors->has('slug'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                            <input class="form-control" type="file" name="image" placeholder="Category Image">
                            @if ($errors->has('image'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @enderror
                    </div>


                    <div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit form</button>
                        <a href="{{route('admin.category.list')}}" class="btn btn-success btn-sm">Back</a>
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
