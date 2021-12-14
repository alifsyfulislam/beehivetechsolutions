<section class="section section-sm bg-white text-center">
    <div class="container">
        <h2>Why Choose Us </h2>
        <div class="row row-30 wow fadeIn">
            @foreach($chooses as $choose)
            <div class="col-md-6 col-lg-4">
                <article class="box-alice">
                    <div class="box-alice__inner">
                        <div class="box-alice__aside">
                            <div class="box-alice__icon-outer">
                                <img src="{{$choose->media->url}}">
                            </div>
{{--                            <div class="box-alice__icon-outer"><span class="box-alice__icon linearicons-laptop-phone"></span></div>--}}
                        </div>
                        <div class="box-alice__main">
                            <h5 class="box-alice__title">{{$choose->title}}</h5>
                            <p>{{$choose->details}}</p>
                        </div>
                    </div>
                </article>
            </div>
                @endforeach
        </div>
    </div>
</section>