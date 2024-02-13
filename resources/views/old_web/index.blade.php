@extends('web.layout')
@section('page_title', 'Home')
@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    @include('web.section.home_slider')
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ======================= Category Style ======================== -->
    @include('web.section.category')
    <!-- ======================= Category Style 1 ======================== -->
    <!-- ======================= Product List ======================== -->
    <section class="middle mt-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Trendy Products</h2>
                        <h3 class="ft-bold pt-3">Our Trending Products</h3>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center rows-products">

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/1.jpg') }}"
                                        alt="..."></a>
                                <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Half Running
                                            Set</a></h5>
                                    <div class="elis_rty"><span class="ft-bold fs-md text-dark">₹119.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/2.jpg') }}"
                                        alt="..."></a>
                                <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Formal Men
                                            Lowers</a></h5>
                                    <div class="elis_rty"><span
                                            class="text-muted ft-medium line-through mr-2">₹129.00</span><span
                                            class="ft-bold theme-cl fs-md">₹79.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/3.jpg') }}"
                                        alt="..."></a>
                                <div
                                    class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Half Running
                                            Suit</a></h5>
                                    <div class="elis_rty"><span class="ft-bold fs-md text-dark">₹80.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <div class="badge bg-warning text-white position-absolute ft-regular ab-left text-upper">Hot</div>
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/4.jpg') }}"
                                        alt="..."></a>
                                <div
                                    class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Half Fancy
                                            Lady Dress</a></h5>
                                    <div class="elis_rty"><span
                                            class="text-muted ft-medium line-through mr-2">₹149.00</span><span
                                            class="ft-bold theme-cl fs-md">₹110.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/5.jpg') }}"
                                        alt="..."></a>
                                <div
                                    class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Flix Flox
                                            Jeans</a></h5>
                                    <div class="elis_rty"><span
                                            class="text-muted ft-medium line-through mr-2">₹90.00</span><span
                                            class="ft-bold theme-cl fs-md">₹49.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <div class="badge bg-danger text-white position-absolute ft-regular ab-left text-upper">Hot</div>
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/6.jpg') }}"
                                        alt="..."></a>
                                <div
                                    class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Fancy Salwar
                                            Suits</a></h5>
                                    <div class="elis_rty"><span class="ft-bold fs-md text-dark">₹114.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/7.jpg') }}"
                                        alt="..."></a>
                                <div
                                    class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Collot Full
                                            Dress</a></h5>
                                    <div class="elis_rty"><span class="ft-bold theme-cl fs-md text-dark">₹120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                    <div class="product_grid card b-0">
                        <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                class="far fa-heart"></i></button>
                        <div class="card-body p-0">
                            <div class="shop_thumb position-relative">
                                <a class="card-img-top d-block overflow-hidden" href="javascript:void(0)"><img
                                        class="card-img-top" src="{{ asset('frontend/assets/img/product/8.jpg') }}"
                                        alt="..."></a>
                                <div
                                    class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                    <div class="edlio"><a href="javascript:void(0)" data-toggle="modal"
                                            data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                class="fas fa-eye mr-1"></i>Quick View</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer b-0 p-3 pb-0 bg-white d-flex align-items-start justify-content-center">
                            <div class="text-left">
                                <div class="text-center">
                                    <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="javascript:void(0)">Formal Fluex
                                            Kurti</a></h5>
                                    <div class="elis_rty"><span
                                            class="text-muted ft-medium line-through mr-2">₹149.00</span><span
                                            class="ft-bold theme-cl fs-md">₹129.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row -->

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="position-relative text-center">
                        <a href="javascript:void(0)" class="btn stretched-link borders">Explore More<i
                                class="lni lni-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Product List ======================== -->

    <!-- ======================= Category Products Lists ======================== -->
    @include('web.section.category_product')
    <!-- ======================= Category Products List ======================== -->



    <!-- ======================= Deals of The Day ====================== -->
    <section class="bg-cover" style="background:url({{ asset('frontend/assets/img/banner-c.jpg') }}) no-repeat;"
        data-overlay="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">

                    <div class="deals_wrap text-center">
                        <h4 class="ft-medium text-light">Get up to -40% Off</h4>
                        <h2 class="ft-bold text-light">Only Summer Collections</h2>
                        <p class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                            occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                            id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <div class="mt-5">
                            <a href="javascript:void(0)" class="btn btn-white stretched-link">Start Shopping <i
                                    class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Deals of The Day ====================== -->


    <!-- ======================= Good Deals Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Good Deals</h2>
                        <h3 class="ft-bold pt-3">Deals of The Day</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="slide_items">

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                    Sale</div>
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/8.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half
                                                    Running Set</a></h5>
                                            <div class="elis_rty"><span class="ft-bold fs-md text-dark">$119.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New
                                </div>
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/9.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a
                                                    href="shop-single-v1.html">Formal Men Lowers</a></h5>
                                            <div class="elis_rty"><span
                                                    class="text-muted ft-medium line-through mr-2">$129.00</span><span
                                                    class="ft-bold theme-cl fs-md">$79.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/10.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half
                                                    Running Suit</a></h5>
                                            <div class="elis_rty"><span class="ft-bold fs-md text-dark">$80.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <div class="badge bg-warning text-white position-absolute ft-regular ab-left text-upper">
                                    Hot</div>
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/11.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half
                                                    Fancy Lady Dress</a></h5>
                                            <div class="elis_rty"><span
                                                    class="text-muted ft-medium line-through mr-2">$149.00</span><span
                                                    class="ft-bold theme-cl fs-md">$110.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/12.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Flix
                                                    Flox Jeans</a></h5>
                                            <div class="elis_rty"><span
                                                    class="text-muted ft-medium line-through mr-2">$90.00</span><span
                                                    class="ft-bold theme-cl fs-md">$49.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <div class="badge bg-danger text-white position-absolute ft-regular ab-left text-upper">
                                    Hot</div>
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/13.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Fancy
                                                    Salwar Suits</a></h5>
                                            <div class="elis_rty"><span class="ft-bold fs-md text-dark">$114.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                    Sale</div>
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                                        class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img
                                                class="card-img-top"
                                                src="{{ asset('frontend/assets/img/product/14.jpg') }}"
                                                alt="..."></a>
                                        <div
                                            class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio"><a href="#" data-toggle="modal"
                                                    data-target="#quickview" class="text-white fs-sm ft-medium"><i
                                                        class="fas fa-eye mr-1"></i>Quick View</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a
                                                    href="shop-single-v1.html">Collot Full Dress</a></h5>
                                            <div class="elis_rty"><span
                                                    class="ft-bold theme-cl fs-md text-dark">$120.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Good Deals Start ============================ -->

    <!-- ======================= Blog Start ============================ -->
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Latest News</h2>
                        <h3 class="ft-bold pt-3">New Updates</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="javascript:void(0)" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/bl-1.png') }}" class="img-fluid rounded"
                                    alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">26 Jan 2021</span>
                            <h5 class="bl_title lh-1"><a href="javascript:void(0)">Let's start bring sale on this
                                    saummer vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="javascript:void(0)" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="javascript:void(0)" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/bl-2.png') }}" class="img-fluid rounded"
                                    alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">17 July 2021</span>
                            <h5 class="bl_title lh-1"><a href="javascript:void(0)">Let's start bring sale on this
                                    saummer vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="javascript:void(0)" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="_blog_wrap">
                        <div class="_blog_thumb mb-2">
                            <a href="javascript:void(0)" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/bl-3.png') }}" class="img-fluid rounded"
                                    alt="" /></a>
                        </div>
                        <div class="_blog_caption">
                            <span class="text-muted">10 Aug 2021</span>
                            <h5 class="bl_title lh-1"><a href="javascript:void(0)">Let's start bring sale on this
                                    saummer vacation.</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                            <a href="javascript:void(0)" class="text-dark fs-sm">Continue Reading..</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Blog Start ============================ -->

    <!-- ======================= Instagram Start ============================ -->
    <section class="p-0">
        <div class="container-fluid p-0">

            <div class="row no-gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Instagram Gallery</h2>
                        <span class="fs-lg ft-bold theme-cl pt-3">@mahak_71</span>
                        <h3 class="ft-bold lh-1">From Instagram</h3>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">

                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-1.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-2.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-3.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-7.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-8.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-4.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-5.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="_insta_wrap">
                        <div class="_insta_thumb">
                            <a href="javascript:void(0);" class="d-block"><img
                                    src="{{ asset('frontend/assets/img/i-6.png') }}" class="img-fluid"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Instagram Start ============================ -->
@endsection
