<section class="p-0">
    <div class="container">
        <div class="row overlio">

            @forelse ($category['home_category'] as $item)
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="cats_caption_wrap">
                    <div class="cats_caption_thumb mb-2">
                        <a href="javascript:void(0)" class="d-block"><img src="{{asset('backend_images/'.$item->image)}}" class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="cats_caption text-center">
                        <h4 class="m-0">{{$item->name}}</h4>
                        {{-- <span class="text-muted">5670 Collections</span> --}}
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        
            
            
            
        </div>
    </div>
</section>