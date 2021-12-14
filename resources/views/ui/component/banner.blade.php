<section class="section swiper-container swiper-slider swiper_style-1 swiper_height-1 swiper-controls-classic section-overlay" data-loop="true" data-autoplay="false" data-simulate-touch="false">

    <div class="swiper-wrapper">
        @foreach($banners as $banner)

        <div class="swiper-slide bg-image-dark" data-slide-bg="{{$banner->media ? $banner->media->url : ''}}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <h1 data-caption-animate="fadeInUpSmall"><span class="d-block font-weight-light">{{$banner->title}}</span>
                        <span class="d-block font-weight-bold">{{substr($banner->details, 0,30).'...'}}</span></h1>
                    <div class="col-12 offset-top-60" data-caption-animate="fadeInUpSmall">
                        <a
                            class="button button-lg button-primary button-ujarak"
                            href="{{route('banner.by.slug',['slug' => $banner->slug])}}">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</section>