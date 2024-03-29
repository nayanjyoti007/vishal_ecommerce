@extends('web.layout')
@section('page_title', $result['product']->name)
@section('head')
@if ($result['product'])
<meta property="og:title" content="{{ $result['product']->name }}" />
<meta property="og:image" content="{{ asset('backend_images/' . $result['product']->image) }}" />
{{--
<meta property="og:image" content="{{asset('web2/img/default/meds.png')}}" />
--}}
<meta property="og:description" content="{{ Str::limit(strip_tags($result['product']->long_description), 200) }}" />
@endif
@endsection
@section('content')
<!-- ======================= Top Breadcrubms ======================== -->
<div class="gray py-3">
   <div class="container">
      <div class="row">
         <div class="colxl-12 col-lg-12 col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->
<!-- ======================= Product Detail ======================== -->
<section class="middle">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
            <div class="quick_view_slide">
               <div class="single_view_slide"><a href="{{ asset('backend_images/' . $result['product']->image) }}"
                  data-lightbox="roadtrip" class="d-block mb-4"><img
                  src="{{ asset('backend_images/' . $result['product']->image) }}"
                  class="img-fluid rounded" alt="" /></a></div>
               @forelse ($result['product_images'] as $itemImages)
               <div class="single_view_slide"><a href="{{ asset('backend_images/' . $itemImages->image) }}"
                  data-lightbox="roadtrip" class="d-block mb-4"><img
                  src="{{ asset('backend_images/' . $itemImages->image) }}" class="img-fluid rounded"
                  alt="" /></a></div>
               @empty
               @endforelse
            </div>
         </div>
         <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
            <div class="prd_details pl-3">
               @if ($result['product']->lead_time != null)
               <div class="prt_01 mb-1"><span
                  class="text-light bg-info rounded px-2 py-1">{{ $result['product']->lead_time }}</span>
               </div>
               @else
               @endif
               <div class="prt_02 mb-3">
                  <h2 class="ft-bold mb-1">{{ $result['product']->name }}</h2>
                  <div class="text-left">
                     {{--
                     <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                        <span class="small">(412 Reviews)</span>
                     </div>
                     --}}
                     <div class="elis_rty">
                        {{-- <span
                           class="ft-medium text-muted line-through fs-md mr-2">₹{{$result['product_attributes_price_min_max'][0]->minPrice}}</span> --}}
                        <span class="ft-bold theme-cl fs-lg mr-2">
                        ₹{{ $result['product_attributes_price_min_max'][0]->minPrice }} - </span>
                        <span class="ft-bold theme-cl fs-lg mr-2">
                        ₹{{ $result['product_attributes_price_min_max'][0]->maxPrice }} </span>
                        {{-- <span class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of Stock</span>
                     </div>
                     --}}
                  </div>
               </div>
               <div class="prt_03 mb-4">
                  <p>{{ $result['product']->short_description }}</p>
               </div>
               <div class="prt_04 mb-2">
                  <p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
                  <div class="text-left pb-0 pt-2">
                     @php
                     $arrSize = [];
                     foreach ($result['product_attributes'] as $itemColor) {
                     $arrSize[$itemColor->size_id] = $itemColor->size;
                     }
                     $arrSize = array_unique($arrSize);
                     @endphp
                     @forelse ($arrSize as $key => $itemSize)
                     {{-- {{dd($itemSize)}} --}}
                     @if ($itemSize != null)
                     <div class="form-check size-option form-option form-check-inline mb-2">
                        {{-- <input class="form-check-input" type="radio" name="size"
                           id="{{ $itemSize }}" value="{{ $itemSize }}">
                        <label class="form-option-label"
                           for="{{ $itemSize }}">{{ $itemSize }}</label> --}}
                        <a href="javascript:void(0)" class="form-option-label removeBorderSize"
                           onclick="showColor('{{ $key }}')"
                           id="size_{{ $key }}">{{ $itemSize }}</a>
                     </div>
                     @endif
                     @empty
                     @endforelse
                  </div>
               </div>
               <div class="prt_04 mb-4">
                  <p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
                  <div class="text-left">
                    {{-- {{dd($result['product_attributes'])}} --}}
                     @forelse ($result['product_attributes'] as $itemColor)
                     {{-- {{prx($itemColor)}} --}}
                     @if ($itemColor->color != null)
                     <input type="hidden"
                        id="my{{ $itemColor->size_id }}{{ $itemColor->color_id }}"
                        data-sizeid="{{ $itemColor->size_id }}"
                        data-colorid="{{ $itemColor->color_id }}" data-mrp="{{ $itemColor->mrp }}"
                        data-price="{{ $itemColor->price }}"
                        data-attrid="{{ $itemColor->id }}"
                        >
                     <div
                        class="form-check size_{{ $itemColor->size_id }} form-option form-check-inline mb-1 allColors">
                        <input class="form-check-input" type="radio" name="color"
                           value="{{ $itemColor->color_id }}">
                        <label class="form-option-label rounded-circle"
                           for="{{ $itemColor->color_id }}"
                           onclick="showImage('{{ $itemColor->color_id }}')"><span
                           class="form-option-color rounded-circle {{ strtolower($itemColor->color) }}"></span></label>
                     </div>
                     @endif
                     @empty
                     @endforelse
                  </div>
               </div>
               <div class="prt_05 mb-4">
                  <div class="form-row mb-7">
                     <div class="col-12 col-lg-auto">
                        <!-- Quantity -->
                        <select class="mb-2 custom-select" id="productQty">
                           @for ($i = 1; $i < 11; $i++)
                           <option value="{{ $i }}">{{ $i }}</option>
                           @endfor
                        </select>
                     </div>
                     <div class="col-12 col-lg">
                        <!-- Submit -->
                        <form method="post" id="cartform">
                           @csrf
                           <input type="hidden" id="size_id" name="size_id">
                           <input type="hidden" id="color_id" name="color_id">
                           <input type="hidden" id="attr_id" name="attr_id">
                           <input type="hidden" id="product_id" name="product_id"
                              value="{{ $result['product']->id }}">
                           <input type="hidden" id="qty" name="qty" value="1">
                           <a href="javascript:void(0)" class="btn btn-block custom-height bg-dark mb-2"
                              onclick="addToCart('{{ $result['product']->id }}')" id="cartBtn">
                           <i class="lni lni-shopping-basket mr-2"></i>Add to Cart
                           </a>
                        </form>
                     </div>
                     <div class="col-12 col-lg-auto">
                        <!-- Wishlist -->
                        <button class="btn custom-height btn-default btn-block mb-2 text-dark"
                           data-toggle="button">
                        <i class="lni lni-heart mr-2"></i>Wishlist
                        </button>
                     </div>
                  </div>
               </div>
               <div class="prt_06">
                  <p class="mb-0 d-flex align-items-center">
                     <span class="mr-4">Share:</span>
                     <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2"
                        href="#!">
                     <i class="fab fa-twitter position-absolute"></i>
                     </a>
                     <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2"
                        href="#!">
                     <i class="fab fa-facebook-f position-absolute"></i>
                     </a>
                     <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted"
                        href="#!">
                     <i class="fab fa-pinterest-p position-absolute"></i>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======================= Product Detail End ======================== -->
<!-- ======================= Product Description ======================= -->
<section class="middle">
   <div class="container">
      <div class="row align-items-center justify-content-center">
         <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4"
               id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="description-tab" href="#description" data-toggle="tab"
                     role="tab" aria-controls="description" aria-selected="true">Description</a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" href="#information" id="information-tab" data-toggle="tab"
                     role="tab" aria-controls="information" aria-selected="false">Additional
                  information</a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" href="#reviews" id="reviews-tab" data-toggle="tab" role="tab"
                     aria-controls="reviews" aria-selected="false">Reviews</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <!-- Description Content -->
               <div class="tab-pane fade show active" id="description" role="tabpanel"
                  aria-labelledby="description-tab">
                  <div class="description_info">
                     <p class="p-0 mb-2">
                        {!! $result['product']->long_description !!}
                     </p>
                  </div>
               </div>
               <!-- Additional Content -->
               <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                  <div class="additionals">
                     <table class="table">
                        <tbody>
                           <tr>
                              <th class="ft-medium text-dark">ID</th>
                              <td>#1253458</td>
                           </tr>
                           <tr>
                              <th class="ft-medium text-dark">SKU</th>
                              <td>KUM125896</td>
                           </tr>
                           <tr>
                              <th class="ft-medium text-dark">Color</th>
                              <td>Sky Blue</td>
                           </tr>
                           <tr>
                              <th class="ft-medium text-dark">Size</th>
                              <td>Xl, 42</td>
                           </tr>
                           <tr>
                              <th class="ft-medium text-dark">Weight</th>
                              <td>450 Gr</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- Reviews Content -->
               <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <div class="reviews_info">
                     <div class="single_rev d-flex align-items-start br-bottom py-3">
                        <div class="single_rev_thumb"><img
                           src="{{ asset('frontend/assets/img/team-1.jpg') }}" class="img-fluid circle"
                           width="90" alt="" /></div>
                        <div class="single_rev_caption d-flex align-items-start pl-3">
                           <div class="single_capt_left">
                              <h5 class="mb-0 fs-md ft-medium lh-1">Daniel Rajdesh</h5>
                              <span class="small">30 jul 2021</span>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                 praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                 molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                 in culpa qui officia deserunt mollitia animi, id est laborum
                              </p>
                           </div>
                           <div class="single_capt_right">
                              <div
                                 class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Single Review -->
                     <div class="single_rev d-flex align-items-start br-bottom py-3">
                        <div class="single_rev_thumb"><img
                           src="{{ asset('frontend/assets/img/team-2.jpg') }}" class="img-fluid circle"
                           width="90" alt="" /></div>
                        <div class="single_rev_caption d-flex align-items-start pl-3">
                           <div class="single_capt_left">
                              <h5 class="mb-0 fs-md ft-medium lh-1">Seema Gupta</h5>
                              <span class="small">30 Aug 2021</span>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                 praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                 molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                 in culpa qui officia deserunt mollitia animi, id est laborum
                              </p>
                           </div>
                           <div class="single_capt_right">
                              <div
                                 class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Single Review -->
                     <div class="single_rev d-flex align-items-start br-bottom py-3">
                        <div class="single_rev_thumb"><img
                           src="{{ asset('frontend/assets/img/team-3.jpg') }}" class="img-fluid circle"
                           width="90" alt="" /></div>
                        <div class="single_rev_caption d-flex align-items-start pl-3">
                           <div class="single_capt_left">
                              <h5 class="mb-0 fs-md ft-medium lh-1">Mark Jugermi</h5>
                              <span class="small">10 Oct 2021</span>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                 praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                 molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                 in culpa qui officia deserunt mollitia animi, id est laborum
                              </p>
                           </div>
                           <div class="single_capt_right">
                              <div
                                 class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Single Review -->
                     <div class="single_rev d-flex align-items-start py-3">
                        <div class="single_rev_thumb"><img
                           src="{{ asset('frontend/assets/img/team-4.jpg') }}" class="img-fluid circle"
                           width="90" alt="" /></div>
                        <div class="single_rev_caption d-flex align-items-start pl-3">
                           <div class="single_capt_left">
                              <h5 class="mb-0 fs-md ft-medium lh-1">Meena Rajpoot</h5>
                              <span class="small">17 Dec 2021</span>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                 praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                 molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                 in culpa qui officia deserunt mollitia animi, id est laborum
                              </p>
                           </div>
                           <div class="single_capt_right">
                              <div
                                 class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="reviews_rate">
                     <form class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <h4>Submit Rating</h4>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <div
                              class="revie_stars d-flex align-items-center justify-content-between px-2 py-2 gray rounded mb-2 mt-1">
                              <div class="srt_013">
                                 <div class="submit-rating">
                                    <input id="star-5" type="radio" name="rating"
                                       value="star-5" />
                                    <label for="star-5" title="5 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                    </label>
                                    <input id="star-4" type="radio" name="rating"
                                       value="star-4" />
                                    <label for="star-4" title="4 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                    </label>
                                    <input id="star-3" type="radio" name="rating"
                                       value="star-3" />
                                    <label for="star-3" title="3 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                    </label>
                                    <input id="star-2" type="radio" name="rating"
                                       value="star-2" />
                                    <label for="star-2" title="2 stars">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                    </label>
                                    <input id="star-1" type="radio" name="rating"
                                       value="star-1" />
                                    <label for="star-1" title="1 star">
                                    <i class="active fa fa-star" aria-hidden="true"></i>
                                    </label>
                                 </div>
                              </div>
                              <div class="srt_014">
                                 <h6 class="mb-0">4 Star</h6>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                              <label class="medium text-dark ft-medium">Full Name</label>
                              <input type="text" class="form-control" />
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                              <label class="medium text-dark ft-medium">Email Address</label>
                              <input type="email" class="form-control" />
                           </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <div class="form-group">
                              <label class="medium text-dark ft-medium">Description</label>
                              <textarea class="form-control"></textarea>
                           </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <div class="form-group m-0">
                              <a class="btn btn-white stretched-link hover-black">Submit Review <i
                                 class="lni lni-arrow-right"></i></a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======================= Product Description End ==================== -->
<!-- ======================= Similar Products Start ============================ -->
<section class="middle pt-0">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="sec_title position-relative text-center">
               <h2 class="off_title">Similar Products</h2>
               <h3 class="ft-bold pt-3">Matching Producta</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="slide_items">
               <!-- single Item -->
               @forelse ($result['related_products'] as $item)
               <div class="single_itesm">
                  <div class="product_grid card b-0 mb-0">
                     <div
                        class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                        Sale
                     </div>
                     <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i
                        class="far fa-heart"></i></button>
                     <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                           <a class="card-img-top d-block overflow-hidden"
                              href="{{ route('web.productdetails', ['product_slug' => $item->slug]) }}"><img
                              class="card-img-top"
                              src="{{ asset('backend_images/' . $item->image) }}"
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
                                 href="{{ route('web.productdetails', ['product_slug' => $item->slug]) }}">{{ $item->name }}</a>
                              </h5>
                              <div class="elis_rty"><span
                                 class="ft-bold fs-md text-dark">₹{{ $result['related_products_attributes'][$item->id][0]->minPrice }}
                                 -
                                 ₹{{ $result['related_products_attributes'][$item->id][0]->maxPrice }}</span>
                              </div>
                           </div>
                        </div>
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
<!-- ======================= Similar Products Start ============================ -->
<!-- ======================= Customer Features ======================== -->
<section class="px-0 py-3 br-top">
   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="d-flex align-items-center justify-content-start py-2">
               <div class="d_ico">
                  <i class="fas fa-shopping-basket"></i>
               </div>
               <div class="d_capt">
                  <h5 class="mb-0">Free Shipping</h5>
                  <span class="text-muted">Capped at $10 per order</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="d-flex align-items-center justify-content-start py-2">
               <div class="d_ico">
                  <i class="far fa-credit-card"></i>
               </div>
               <div class="d_capt">
                  <h5 class="mb-0">Secure Payments</h5>
                  <span class="text-muted">Up to 6 months installments</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="d-flex align-items-center justify-content-start py-2">
               <div class="d_ico">
                  <i class="fas fa-shield-alt"></i>
               </div>
               <div class="d_capt">
                  <h5 class="mb-0">15-Days Returns</h5>
                  <span class="text-muted">Shop with fully confidence</span>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="d-flex align-items-center justify-content-start py-2">
               <div class="d_ico">
                  <i class="fas fa-headphones-alt"></i>
               </div>
               <div class="d_capt">
                  <h5 class="mb-0">24x7 Fully Support</h5>
                  <span class="text-muted">Get friendly support</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ======================= Customer Features ======================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   $("#productQty").change(function(e) {
       e.preventDefault();
       var value = $(this).val();
       $("#qty").val(value);
   });


   function showColor(size) {
       $("#color_id").val(null);
       $("#size_id").val(size);
       $(".allColors").hide();
       $(".size_" + size).show();
       $(".removeBorderSize").css('border', '0px solid');
       $("#size_" + size).css('border', '1px solid')

   }

   function showImage(id) {
       $("#color_id").val(id);
       var size_id = $("#size_id").val();
       var color_id = $("#color_id").val();


       var mrp = $("#my" + size_id + color_id).attr('data-mrp');
       var price = $("#my" + size_id + color_id).attr('data-price');
       var attr_id = $("#my" + size_id + color_id).attr('data-attrid');

       $("#attr_id").val(attr_id);

       alert(mrp);
       alert(price);
       alert(attr_id);


   }

   function addToCart(id) {
       var color_id = $("#color_id").val();
       var size_id = $("#size_id").val();

       if (size_id == '' || size_id == null) {
           swal("Please Select Size !!", '', "warning");
       } else if (color_id == '' || color_id == null) {
           swal("Please Select Color !!", '', "warning");
       } else {


           var formData = $("#cartform").serialize();
           $.ajax({
               url: "{{ route('web.cart.save') }}",
               type: "POST",
               data: formData,
               beforeSend: function() {
                   $("#cartBtn").prop('disabled', true);
                   $("#cartBtn").text('Please Wait ...')

               },
               success: function(data) {
                   console.log(data);
                   if (data.status == 200) {
                     swal("Good job!", data.msg, "success");
                     location.reload();
                   } else {
                       alert(data.msg);
                   }
               }
           });


       }
   }
</script>
@endsection
