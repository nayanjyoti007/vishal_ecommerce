<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from www.themezhub.net/kumo-demo-2/kumo/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 08:35:08 GMT -->
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Kumo- Fashion eCommerce HTML Template</title>
		 
        <!-- Custom CSS -->
        <link href="{{asset('frontend/assets/css/styles.css')}}" rel="stylesheet">
		
    </head>
	
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
			<!-- Top Header -->
			<div class="py-2 bg-dark">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
							<div class="top_first"><a href="callto:(+84)0123456789" class="medium text-light">(+84) 0123 456 789</a></div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 hide-ipad">
							<div class="top_second text-center"><p class="medium text-light m-0 p-0">Get Free delivery from $2000 <a href="#" class="medium text-dark text-underline">Shop Now</a></p></div>
						</div>
						
						<!-- Right Menu -->
						<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12">

							<div class="currency-selector dropdown js-dropdown float-right">
								<a href="javascript:void(0);" data-toggle="dropdown" class="popup-title"  title="Currency" aria-label="Currency dropdown">
									<span class="hidden-xl-down medium text-light">Currency:</span>
									<span class="iso_code medium text-light">$USD</span>
									<i class="fa fa-angle-down medium text-light"></i>
								</a>
								<ul class="popup-content dropdown-menu">  
									<li><a title="Euro" href="#" class="dropdown-item medium text-muted">EUR €</a></li>
									<li class="current"><a title="US Dollar" href="#" class="dropdown-item medium text-muted">USD $</a></li>
								</ul>
							</div>
							
							<!-- Choose Language -->
						
							<div class="language-selector-wrapper dropdown js-dropdown float-right mr-3">
								<a class="popup-title" href="javascript:void(0)" data-toggle="dropdown" title="Language" aria-label="Language dropdown">
									<span class="hidden-xl-down medium text-light">Language:</span>
									<span class="iso_code medium text-light">English</span>
									<i class="fa fa-angle-down medium text-light"></i>
								</a>
								<ul class="dropdown-menu popup-content link">
									<li class="current"><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('frontend/assets/img/1.jpg')}}" alt="en" width="16" height="11" /><span>English</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('frontend/assets/img/2.jpg')}}" alt="fr" width="16" height="11" /><span>Français</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('frontend/assets/img/3.jpg')}}" alt="de" width="16" height="11" /><span>Deutsch</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('frontend/assets/img/4.jpg')}}" alt="it" width="16" height="11" /><span>Italiano</span></a></li>
									<li><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('frontend/assets/img/5.jpg')}}" alt="es" width="16" height="11" /><span>Español</span></a></li>
									<li ><a href="javascript:void(0);" class="dropdown-item medium text-muted"><img src="{{asset('frontend/assets/img/6.jpg')}}" alt="ar" width="16" height="11" /><span>اللغة العربية</span></a></li>
								</ul>
							</div>
							
							<div class="currency-selector dropdown js-dropdown float-right mr-3">
								<a href="javascript:void(0);" class="text-light medium">Wishlist</a>
							</div>
							
							<div class="currency-selector dropdown js-dropdown float-right mr-3">
								<a href="javascript:void(0);" class="text-light medium">My Account</a>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			
            <!-- Start Navigation -->
			<div class="header header-light dark-text">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{asset('frontend/assets/img/logo.png')}}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter">2</span>
									</a>
								</li>
								<li>
									<a href="#" onclick="openCart()">
										<i class="lni lni-shopping-basket"></i><span class="dn-counter">0</span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a href="#">Home</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.html">Home 1</a></li>
										<li><a href="home-2.html">Home 2</a></li>
										<li><a href="home-3.html">Home 3</a></li>
										<li><a href="home-4.html">Home 4</a></li>
										<li><a href="home-5.html">Home 5</a></li>
										<li><a href="home-6.html">Home 6</a></li>
										<li><a href="home-7.html">Home 7</a></li>
										<li><a href="home-8.html">Home 8</a></li>
										<li><a href="home-9.html">Home 9</a></li>
										<li><a href="home-10.html">Home 10</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Shop</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="javascript:void(0);">Account Dashboard</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="my-orders.html">My Order</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="profile-info.html">Profile Info</a></li>
												<li><a href="addresses.html">Addresses</a></li>
												<li><a href="payment-methode.html">Payment Methode</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Support</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="shoping-cart.html">Shopping Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="complete-order.html">Order Complete</a></li>
											</ul>
										</li>
										<li><a href="shop-style-1.html">Shop Style 01</a></li>
										<li><a href="shop-style-2.html">Shop Style 02</a></li>
										<li><a href="shop-style-3.html">Shop Style 03</a></li>
										<li><a href="shop-style-4.html">Shop Style 04</a></li>
										<li><a href="shop-style-5.html">Shop Style 05</a></li>
										<li><a href="shop-list-view.html">Shop List Style</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Product</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="shop-single-v1.html">Product Detail v01</a></li>
										<li><a href="shop-single-v2.html">Product Detail v02</a></li>
										<li><a href="shop-single-v3.html">Product Detail v03</a></li>
										<li><a href="shop-single-v4.html">Product Detail v04</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Pages</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="blog.html">Blog Style</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="privacy.html">Privacy Policy</a></li>
										<li><a href="faq.html">FAQs</a></li>
									</ul>
								</li>
								
								<li><a href="docs.html">Docs</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<a href="#" onclick="openSearch()">
										<i class="lni lni-search-alt"></i>
									</a>
								</li>
								<li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="lni lni-user"></i>
									</a>
								</li>
								<li>
									<a href="#" onclick="openWishlist()">
										<i class="lni lni-heart"></i><span class="dn-counter">2</span>
									</a>
								</li>
								<li>
									<a href="#" onclick="openCart()">
										<i class="lni lni-shopping-basket"></i><span class="dn-counter theme-bg">3</span>
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="home-slider margin-bottom-0">

				<!-- Slide -->
				<div data-background-image="{{asset('frontend/assets/img/p-17.png')}}" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									{{-- <div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
											<h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
											<span class="trending">There's nothing like trend</span>
										</div>

										<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div> --}}
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div data-background-image="{{asset('frontend/assets/img/p-19.png')}}" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									{{-- <div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
											<h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
											<span class="trending">There's nothing like trend</span>
										</div>

										<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div> --}}
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>

				

			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ======================= All Category ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Popular Categories</h2>
								<h3 class="ft-bold pt-3">Trending Categories</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-center">
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/fashion.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Wear</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/tshirt.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Kid's Wear</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/accessories.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/sneakers.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Shoes</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/television.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
							<div class="cats_side_wrap text-center mx-auto mb-3">
								<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/pant.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
								<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Pants</a></h6></div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= All Category ======================== -->
			
			<!-- ======================= Products Lists ======================== -->
			<section class="space min pt-0">
				<div class="container">
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							
							<ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="all-tab" href="#all" data-toggle="tab" role="tab" aria-controls="all" aria-selected="true">All</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link active" href="#mens" id="mens-tab" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="false">Men's</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" href="#women" id="women-tab" data-toggle="tab" role="tab" aria-controls="women" aria-selected="false">Women</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" href="#kids" id="kids-tab" data-toggle="tab" role="tab" aria-controls="kids" aria-selected="false">Kids</a>
								</li>
							</ul>
							
							<div class="tab-content" id="myTabContent">
								
								<!-- All Content -->
								<div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
									<div class="tab_product">
										<div class="row rows-products">
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/15.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(5 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/16.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/17.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<span class="small">(32 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/18.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/19.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/20.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(42 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/21.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/22.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(15 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="tab-pane fade show active" id="mens" role="tabpanel" aria-labelledby="mens-tab">
									<div class="tab_product">
										<div class="row rows-products">
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/15.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(5 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/16.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/17.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<span class="small">(32 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/18.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/19.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/20.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(42 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/21.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/22.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(15 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Women Content -->
								<div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
									<div class="tab_product">
										<div class="row rows-products">
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/15.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(5 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/16.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/17.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<span class="small">(32 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/18.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/19.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/20.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(42 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/21.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/22.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(15 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
									<div class="tab_product">
										<div class="row rows-products">
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/15.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(5 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/16.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/17.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<span class="small">(32 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/18.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/19.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/20.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(42 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/21.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(0 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Single -->
											<div class="col-xl-3 col-lg-4 col-md-6 col-6">
												<div class="product_grid card b-0">
													<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
													<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
													<div class="card-body p-0">
														<div class="shop_thumb position-relative">
															<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/22.png')}}" alt="..."></a>
															<div class="product-left-hover-overlay">
																<ul class="left-over-buttons">
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
																	<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
														<div class="text-left">
															<div class="text-left">
																<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star filled"></i>
																	<i class="fas fa-star"></i>
																	<span class="small">(15 Reviews)</span>
																</div>
																<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
																<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
															</div>
														</div>
													</div>
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
			<!-- ======================= Products List ======================== -->
			
			<!-- ======================= Product List ======================== -->
			<section class="middle gray">
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
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/1.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color1" id="white" checked="">
												<label class="form-option-label small rounded-circle" for="white"><span class="form-option-color rounded-circle blc1"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color1" id="blue">
												<label class="form-option-label small rounded-circle" for="blue"><span class="form-option-color rounded-circle blc2"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color1" id="yellow">
												<label class="form-option-label small rounded-circle" for="yellow"><span class="form-option-color rounded-circle blc3"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color1" id="pink">
												<label class="form-option-label small rounded-circle" for="pink"><span class="form-option-color rounded-circle blc4"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Running Set</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/2.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color2" id="white2">
												<label class="form-option-label small rounded-circle" for="white2"><span class="form-option-color rounded-circle blc5"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color2" id="blue2">
												<label class="form-option-label small rounded-circle" for="blue2"><span class="form-option-color rounded-circle blc2"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color2" id="yellow2">
												<label class="form-option-label small rounded-circle" for="yellow2"><span class="form-option-color rounded-circle blc6"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color2" id="pink2">
												<label class="form-option-label small rounded-circle" for="pink2"><span class="form-option-color rounded-circle blc4"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Formal Men Lowers</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/3.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color3" id="white3" checked="">
												<label class="form-option-label small rounded-circle" for="white3"><span class="form-option-color rounded-circle blc7"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color3" id="blue3">
												<label class="form-option-label small rounded-circle" for="blue3"><span class="form-option-color rounded-circle blc2"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color3" id="yellow3">
												<label class="form-option-label small rounded-circle" for="yellow3"><span class="form-option-color rounded-circle blc5"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color3" id="pink3">
												<label class="form-option-label small rounded-circle" for="pink3"><span class="form-option-color rounded-circle blc3"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Running Suit</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-warning text-white position-absolute ft-regular ab-left text-upper">Hot</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/4.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color4" id="white4">
												<label class="form-option-label small rounded-circle" for="white4"><span class="form-option-color rounded-circle blc8"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color4" id="blue4">
												<label class="form-option-label small rounded-circle" for="blue4"><span class="form-option-color rounded-circle blc2"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color4" id="yellow4">
												<label class="form-option-label small rounded-circle" for="yellow4"><span class="form-option-color rounded-circle blc6"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color4" id="pink4">
												<label class="form-option-label small rounded-circle" for="pink4"><span class="form-option-color rounded-circle blc5"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Half Fancy Lady Dress</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/5.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color5" id="white5">
												<label class="form-option-label small rounded-circle" for="white5"><span class="form-option-color rounded-circle blc8"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color5" id="blue5">
												<label class="form-option-label small rounded-circle" for="blue5"><span class="form-option-color rounded-circle blc5"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color5" id="yellow5">
												<label class="form-option-label small rounded-circle" for="yellow5"><span class="form-option-color rounded-circle blc3"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color5" id="pink5">
												<label class="form-option-label small rounded-circle" for="pink5"><span class="form-option-color rounded-circle blc6"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Flix Flox Jeans</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-danger text-white position-absolute ft-regular ab-left text-upper">Hot</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/6.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color6" id="white6">
												<label class="form-option-label small rounded-circle" for="white"><span class="form-option-color rounded-circle blc1"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color6" id="blue6">
												<label class="form-option-label small rounded-circle" for="blue6"><span class="form-option-color rounded-circle blc7"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color6" id="yellow6">
												<label class="form-option-label small rounded-circle" for="yellow6"><span class="form-option-color rounded-circle blc3"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color6" id="pink6">
												<label class="form-option-label small rounded-circle" for="pink6"><span class="form-option-color rounded-circle blc6"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Fancy Salwar Suits</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/7.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color7" id="white7">
												<label class="form-option-label small rounded-circle" for="white7"><span class="form-option-color rounded-circle blc2"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color7" id="blue7">
												<label class="form-option-label small rounded-circle" for="blue7"><span class="form-option-color rounded-circle blc8"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color7" id="yellow7">
												<label class="form-option-label small rounded-circle" for="yellow7"><span class="form-option-color rounded-circle blc3"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color7" id="pink7">
												<label class="form-option-label small rounded-circle" for="pink7"><span class="form-option-color rounded-circle blc6"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{asset('frontend/assets/img/product/1.jpg')}}" alt="..."></a>
										<div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
											<div class="edlio"><a href="#" data-toggle="modal" data-target="#quickview" class="text-white fs-sm ft-medium"><i class="fas fa-eye mr-1"></i>Quick View</a></div>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2">
									<div class="d-flex align-items-start justify-content-between">
										<div class="text-left">
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color88" id="white88">
												<label class="form-option-label small rounded-circle" for="white88"><span class="form-option-color rounded-circle blc7"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color88" id="blue88">
												<label class="form-option-label small rounded-circle" for="blue88"><span class="form-option-color rounded-circle blc2"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color88" id="yellow88">
												<label class="form-option-label small rounded-circle" for="yellow88"><span class="form-option-color rounded-circle blc5"></span></label>
											</div>
											<div class="form-check form-option form-check-inline mb-1">
												<input class="form-check-input" type="radio" name="color88" id="pink88">
												<label class="form-option-label small rounded-circle" for="pink88"><span class="form-option-color rounded-circle blc3"></span></label>
											</div>
										</div>
										<div class="text-right">
											<button class="btn auto btn_love snackbar-wishlist"><i class="far fa-heart"></i></button> 
										</div>
									</div>
									<div class="text-left">
										<h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Collot Full Dress</a></h5>
										<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<!-- row -->
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="shop-style-1.html" class="btn stretched-link borders">Explore More<i class="lni lni-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= Product List ======================== -->
			
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
									<a href="blog-detail.html" class="d-block"><img src="{{asset('frontend/assets/img/bl-1.png')}}" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted">26 Jan 2021</span>
									<h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="blog-detail.html" class="d-block"><img src="{{asset('frontend/assets/img/bl-2.png')}}" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted">17 July 2021</span>
									<h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="_blog_wrap">
								<div class="_blog_thumb mb-2">
									<a href="blog-detail.html" class="d-block"><img src="{{asset('frontend/assets/img/bl-3.png')}}" class="img-fluid rounded" alt="" /></a>
								</div>
								<div class="_blog_caption">
									<span class="text-muted">10 Aug 2021</span>
									<h5 class="bl_title lh-1"><a href="blog-detail.html">Let's start bring sale on this saummer vacation.</a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<a href="blog-detail.html" class="text-dark fs-sm">Continue Reading..</a>
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
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-1.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-2.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-3.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-7.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-8.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-4.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-5.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="_insta_wrap">
								<div class="_insta_thumb">
									<a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/i-6.png')}}" class="img-fluid" alt="" /></a>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ======================= Instagram Start ============================ -->
			
			<!-- ============================= Customer Features =============================== -->
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
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<img src="{{asset('frontend/assets/img/logo-light.png')}}" class="img-footer small mb-2" alt="" />
									
									<div class="address mt-3">
										3298 Grant Street Longview, TX<br>United Kingdom 75601	
									</div>
									<div class="address mt-3">
										1-202-555-0106<br>help@shopper.com
									</div>
									<div class="address mt-3">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Supports</h4>
									<ul class="footer-menu">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">About Page</a></li>
										<li><a href="#">Size Guide</a></li>
										<li><a href="#">Shipping & Returns</a></li>
										<li><a href="#">FAQ's Page</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Shop</h4>
									<ul class="footer-menu">
										<li><a href="#">Men's Shopping</a></li>
										<li><a href="#">Women's Shopping</a></li>
										<li><a href="#">Kids's Shopping</a></li>
										<li><a href="#">Furniture</a></li>
										<li><a href="#">Discounts</a></li>
									</ul>
								</div>
							</div>
					
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Company</h4>
									<ul class="footer-menu">
										<li><a href="#">About</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Subscribe</h4>
									<p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Email Address">
											<div class="input-group-append">
												<button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
											</div>
										</div>
									</div>
									<div class="address mt-3">
										<h5 class="fs-sm text-light">Secure Payments</h5>
										<div class="scr_payment"><img src="{{asset('frontend/assets/img/card.png')}}" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
								
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Product View Modal -->
			<div class="modal fade lg-modal" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickviewmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="quickviewmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body">
							<div class="quick_view_wrap">
					
								<div class="quick_view_thmb">
									<div class="quick_view_slide">
										<div class="single_view_slide"><img src="{{asset('frontend/assets/img/product/1.jpg')}}" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="{{asset('frontend/assets/img/product/2.jpg')}}" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="{{asset('frontend/assets/img/product/3.jpg')}}" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="{{asset('frontend/assets/img/product/4.jpg')}}" class="img-fluid" alt="" /></div>
									</div>
								</div>
								
								<div class="quick_view_capt">
									<div class="prd_details">
										
										<div class="prt_01 mb-1"><span class="text-light bg-info rounded px-2 py-1">Dresses</span></div>
										<div class="prt_02 mb-2">
											<h2 class="ft-bold mb-1">Women Striped Shirt Dress</h2>
											<div class="text-left">
												<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="small">(412 Reviews)</span>
												</div>
												<div class="elis_rty"><span class="ft-medium text-muted line-through fs-md mr-2">$199</span><span class="ft-bold theme-cl fs-lg mr-2">$110</span><span class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of Stock</span></div>
											</div>
										</div>
										
										<div class="prt_03 mb-3">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
										</div>
										
										<div class="prt_04 mb-2">
											<p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
											<div class="text-left">
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="white8">
													<label class="form-option-label rounded-circle" for="white8"><span class="form-option-color rounded-circle blc7"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="blue8">
													<label class="form-option-label rounded-circle" for="blue8"><span class="form-option-color rounded-circle blc2"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="yellow8">
													<label class="form-option-label rounded-circle" for="yellow8"><span class="form-option-color rounded-circle blc5"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="pink8">
													<label class="form-option-label rounded-circle" for="pink8"><span class="form-option-color rounded-circle blc3"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="red">
													<label class="form-option-label rounded-circle" for="red"><span class="form-option-color rounded-circle blc4"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="green">
													<label class="form-option-label rounded-circle" for="green"><span class="form-option-color rounded-circle blc6"></span></label>
												</div>
											</div>
										</div>
										
										<div class="prt_04 mb-4">
											<p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
											<div class="text-left pb-0 pt-2">
												<div class="form-check size-option form-option form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="28" checked="">
													<label class="form-option-label" for="28">28</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="30">
													<label class="form-option-label" for="30">30</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="32">
													<label class="form-option-label" for="32">32</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="34">
													<label class="form-option-label" for="34">34</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="36">
													<label class="form-option-label" for="36">36</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="38">
													<label class="form-option-label" for="38">38</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="40">
													<label class="form-option-label" for="40">40</label>
												</div>
											</div>
										</div>
										
										<div class="prt_05 mb-4">
											<div class="form-row mb-7">
												<div class="col-12 col-lg-auto">
													<!-- Quantity -->
													<select class="mb-2 custom-select">
													  <option value="1" selected="">1</option>
													  <option value="2">2</option>
													  <option value="3">3</option>
													  <option value="4">4</option>
													  <option value="5">5</option>
													</select>
												</div>
												<div class="col-12 col-lg">
													<!-- Submit -->
													<button type="submit" class="btn btn-block custom-height bg-dark mb-2">
														<i class="lni lni-shopping-basket mr-2"></i>Add to Cart 
													</button>
												</div>
												<div class="col-12 col-lg-auto">
													<!-- Wishlist -->
													<button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
														<i class="lni lni-heart mr-2"></i>Wishlist
													</button>
												</div>
										  </div>
										</div>
										
										<div class="prt_06">
											<p class="mb-0 d-flex align-items-center">
											  <span class="mr-4">Share:</span>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
												<i class="fab fa-twitter position-absolute"></i>
											  </a>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
												<i class="fab fa-facebook-f position-absolute"></i>
											  </a>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
												<i class="fab fa-pinterest-p position-absolute"></i>
											  </a>
											</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="loginmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Login</h2>
							</div>
							
							<form>				
								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="Username*">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Password*">
								</div>
								
								<div class="form-group">
									<div class="d-flex align-items-center justify-content-between">
										<div class="flex-1">
											<input id="dd" class="checkbox-custom" name="dd" type="checkbox">
											<label for="dd" class="checkbox-custom-label">Remember Me</label>
										</div>	
										<div class="eltio_k2">
											<a href="#">Lost Your Password?</a>
										</div>	
									</div>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
								</div>
								
								<div class="form-group text-center mb-0">
									<p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark"> Register</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Search -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
						<button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
					</div>
						
					<div class="cart_action px-3 py-4">
						<form class="form m-0 p-0">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Product Keyword.." />
							</div>
							
							<div class="form-group">
								<select class="custom-select">
								  <option value="1" selected="">Choose Category</option>
								  <option value="2">Men's Store</option>
								  <option value="3">Women's Store</option>
								  <option value="4">Kid's Fashion</option>
								  <option value="5">Inner Wear</option>
								</select>
							</div>
							
							<div class="form-group mb-0">
								<button type="button" class="btn d-block full-width btn-dark">Search Product</button>
							</div>
						</form>
					</div>
					
					<div class="d-flex align-items-center justify-content-center br-top br-bottom py-2 px-3">
						<h4 class="cart_heading fs-md mb-0">Hot Categories</h4>
					</div>
						
					<div class="cart_action px-3 py-3">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/tshirt.png')}}" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">T-Shirts</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/pant.png')}}" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Pants</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/fashion.png')}}" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Women's</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/sneakers.png')}}" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Shoes</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/television.png')}}" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{asset('frontend/assets/img/accessories.png')}}" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Wishlist -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
						<button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{asset('frontend/assets/img/product/4.jpg')}}" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{asset('frontend/assets/img/product/8.jpg')}}" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
						</div>
						
						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$417</h3>
						</div>
						
						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark">Move To Cart</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Cart -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
						<button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{asset('frontend/assets/img/product/4.jpg')}}" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{asset('frontend/assets/img/product/7.jpg')}}" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{asset('frontend/assets/img/product/8.jpg')}}" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
						</div>
						
						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$1023</h3>
						</div>
						
						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/ion.rangeSlider.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/slick.js')}}"></script>
		<script src="{{asset('frontend/assets/js/slider-bg.js')}}"></script>
		<script src="{{asset('frontend/assets/js/lightbox.js')}}"></script> 
		<script src="{{asset('frontend/assets/js/smoothproducts.js')}}"></script>
		<script src="{{asset('frontend/assets/js/snackbar.min.js')}}"></script>
		<script src="{{asset('frontend/assets/js/jQuery.style.switcher.js')}}"></script>
		<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

		<script>
			function openWishlist() {
				document.getElementById("Wishlist").style.display = "block";
			}
			function closeWishlist() {
				document.getElementById("Wishlist").style.display = "none";
			}
		</script>
		
		<script>
			function openCart() {
				document.getElementById("Cart").style.display = "block";
			}
			function closeCart() {
				document.getElementById("Cart").style.display = "none";
			}
		</script>

		<script>
			function openSearch() {
				document.getElementById("Search").style.display = "block";
			}
			function closeSearch() {
				document.getElementById("Search").style.display = "none";
			}
		</script>		

	</body>

<!-- Mirrored from www.themezhub.net/kumo-demo-2/kumo/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 08:35:46 GMT -->
</html>