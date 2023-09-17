@extends('admin.layout')
@section('page_title','Coupon')
@section('coupon_active','active')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Coupon</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Admin</a></li>
                            <li class="breadcrumb-item ">Add Coupon</li>
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
                            <form action="{{ route('admin.coupon.submit') }}" method="post" >
                                @csrf

                                <input type="hidden" value="{{isset($coupon) ? $coupon->id : ''}}" name="id">
                                <div class="mb-4">
                                    <label>Coupon Name</label>
                                    <input class="form-control" type="text" name="coupons_name" value="{{isset($coupon) ? $coupon->coupons_name : old('coupons_name')}}" placeholder="Coupon Name">
                                    @if ($errors->has('coupons_name'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('coupons_name') }}</strong>
                                        </span>
                                    @enderror
                            </div>

                           <div class="row">
                            <div class="col-md-6 mb-4">
                                <label>Coupons Code</label>
                                <input class="form-control" type="text" name="coupons_code" value="{{isset($coupon) ? $coupon->coupons_code : old('coupons_code')}}" placeholder="Coupon Code">
                                @if ($errors->has('coupons_code'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('coupons_code') }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="col-md-6 mb-4">
                            <label>Coupons Value</label>
                            <input class="form-control" type="text" name="coupons_value" value="{{isset($coupon) ? $coupon->coupons_value : old('coupons_value')}}" placeholder="Coupon Value">
                            @if ($errors->has('coupons_value'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('coupons_value') }}</strong>
                                </span>
                            @enderror
                    </div>
                           </div>


                           <div class="row">
                            <div class="col-md-4 mb-4">
                                <label>Coupon Type</label>
                                <select class="form-select" aria-label="Default select example" id="type"
                                   name="type">
                                   <option disabled selected>Select Coupon Type</option>
                                <option value="2"
                                {{ isset($coupon->type) && $coupon->type == 2 ? 'selected' : (old('type') == 2 ? 'selected' : null) }}
                                > Percentage</option>
                                <option value="1"
                                {{ isset($coupon->type) && $coupon->type == 1 ? 'selected' : (old('type') == 1 ? 'selected' : null) }}>
                                Value</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="text-danger">
                                <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @enderror
                             </div>


                             <div class="col-md-4 mb-4">
                                <label>Min. Order Amount</label>
                                <input class="form-control" type="text" name="min_order_amt" value="{{isset($coupon) ? $coupon->min_order_amt : old('min_order_amt')}}" placeholder="Coupon Value">
                                @if ($errors->has('min_order_amt'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('min_order_amt') }}</strong>
                                    </span>
                                @enderror
                        </div>


                             <div class="col-md-4 mb-4">
                                <label>Is One Time</label>
                                <select class="form-select" aria-label="Default select example" id="is_one_time"
                                   name="is_one_time">
                                <option value="2"
                                {{ isset($coupon->is_one_time) && $coupon->is_one_time == 2 ? 'selected' : (old('is_one_time') == 2 ? 'selected' : null) }}
                                selected>No</option>
                                <option value="1"
                                {{ isset($coupon->is_one_time) && $coupon->is_one_time == 1 ? 'selected' : (old('is_one_time') == 1 ? 'selected' : null) }}>
                                Yes</option>
                                </select>
                                @if ($errors->has('is_one_time'))
                                <span class="text-danger">
                                <strong>{{ $errors->first('is_one_time') }}</strong>
                                </span>
                                @enderror
                             </div>

                           </div>


     


                    <div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit form</button>
                        <a href="{{route('admin.coupon.list')}}" class="btn btn-success btn-sm">Back</a>
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
