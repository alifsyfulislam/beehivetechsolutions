<section class="section section-md bg-white text-center">
    <div class="container">
        <h2>Our Services</h2>
        <div class="row row-30 justify-content-md-center">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                <article class="box-chloe box-chloe_primary">
                    <img src="{{$service->media->url}}" alt="not found">
                    <div class="box-chloe__main">
                        <h4 class="box-chloe__title">{{$service->title}}</h4>
                        <p class="wrapping-paragraph">
                            {{substr($service->details, 0,120)}}
                        </p>
                        <a
                                class="button button-sm button-default button-ujarak"
                                href="{{route('service.by.slug',['slug' => $service->slug])}}"
                        >
                            View Details
                        </a>
                    </div>
                </article>
            </div>
                @endforeach
        </div>
    </div>
</section>