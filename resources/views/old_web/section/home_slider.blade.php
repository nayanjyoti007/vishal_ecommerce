    <div class="home-slider hide-navigation margin-bottom-0">
        @forelse ($sliders as $item)
                    <!-- Slide -->
        <div data-background-image="{{asset('backend_images/'.$item->image)}}" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">
                                <div class="home-slider-title mb-4">
                                    <h1 class="mb-1 ft-bold text-light">{{$item->heading}}</h1>
                                    <h3 class="sm-heading text-light">{{$item->title}}</h3>
                                    {{-- <span class="trending text-light"></span> --}}
                                </div>

                                <a href="javascript:void(0)" class="btn btn-white stretched-link">Shop Now<i
                                        class="lni lni-arrow-right ml-2"></i></a>
                            </div>
                            <!-- Slide Title / End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse
    </div>