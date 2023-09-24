<section class="space min pt-0">
    <div class="container">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4"
                    id="myTab" role="tablist">

                    @forelse ($category['home_category'] as $item)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#{{ $item->slug_name }}" id="{{ $item->slug_name }}-tab"
                                data-toggle="tab" role="tab" aria-controls="{{ $item->slug_name }}"
                                aria-selected="false">{{ $item->name }}</a>
                        </li>
                    @empty
                    @endforelse



                    {{-- <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#women" id="women-tab" data-toggle="tab" role="tab"
                            aria-controls="women" aria-selected="false">Women</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#kids" id="kids-tab" data-toggle="tab" role="tab"
                            aria-controls="kids" aria-selected="false">Kids</a>
                    </li> --}}

                </ul>

                <div class="tab-content" id="myTabContent">
                    @php
                        $loop_count = 1;
                    @endphp

                    @forelse ($category['home_category'] as $item)
                        @php
                            
                            if ($loop_count == 1) {
                                $activeClass = 'active';
                                $loop_count++;
                            } else {
                                $activeClass = '';
                            }
                        @endphp

                        <div class="tab-pane fade show {{ $activeClass }}" id="{{ $item->slug_name }}"
                            role="tabpanel" aria-labelledby="{{ $item->slug_name }}-tab">
                            <div class="tab_product">
                                <div class="row rows-products">

                                    @forelse ($category['home_category_product'][$item->id] as $product)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                            <div class="product_grid card b-0">
                                                <div
                                                    class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                                    Sale</div>
                                                <div class="card-body p-0">
                                                    <div class="shop_thumb position-relative">
                                                        <a class="card-img-top d-block overflow-hidden"
                                                            href="{{route('web.productdetails',['product_slug' => $product->slug])}}"><img class="card-img-top"
                                                                src="{{ asset('backend_images/'.$product->image) }}"
                                                                alt="..."></a>
                                                        <div
                                                            class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                            <div class="edlio"><a href="javascript:void(0);"
                                                                    class="text-underline fs-sm ft-bold snackbar-addcart">Add
                                                                    To Cart</a></div>
                                                            <div class="edlio d-flex align-items-center">
                                                                <button
                                                                    class="btn auto btn_love mr-2 snackbar-wishlist"><i
                                                                        class="far fa-heart"></i></button>
                                                                <a href="#" class="text-underline"
                                                                    data-toggle="modal" data-target="#quickview"><i
                                                                        class="fas fa-expand-arrows-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                                    <div class="text-left">
                                                        <div class="text-left">
                                                            <div
                                                                class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                                
                                                                <span class="small">{{$product->name}}</span>
                                                            </div>
                                                            <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                                    href="{{route('web.productdetails',['product_slug' => $product->slug])}}"></a>
                                                            </h5>
                                                            <div class="elis_rty"><span
                                                                    class="ft-bold text-dark fs-sm">₹{{$category['home_category_product_attr'][$product->id][0]->minPrice}} - ₹{{$category['home_category_product_attr'][$product->id][0]->maxPrice}}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    <p>Category Product Not Found !!</p>
                                    @endforelse


                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse



                </div>

            </div>
        </div>

    </div>
</section>