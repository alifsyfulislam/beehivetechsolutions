<section class="section section-md bg-gray-light text-center">
    <div class="container">
        <h2>Our Clients</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-outer-navigation-wrap owl-carousel_nav-modern wow fadeIn">
            <div class="owl-carousel quote-creative-carousel" data-items="1" data-lg-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="20" data-mouse-drag="false" data-navigation-container="#owl-carousel-nav" data-dots-each="1">
                @foreach($clients as $client)
                <div class="item">
                    <article class="quote-creative">
                        <div class="quote-creative__header">
                            <div class="quote-creative__media"><img src="{{$client->media->url}}" alt="" width="112" height="99"/>
                            </div>
                            <div class="quote-creative__info">
                                @if(!empty($client->middle_name))
                                <p class="quote-creative__title">
                                    {{$client->first_name.' '.$client->middle_name.' '.$client->last_name}}
                                </p>
                                @else
                                    {{$client->first_name.' '.$client->last_name}}
                                    @endif
                                <p class="quote-creative__subtitle">{{$client->type}}</p>
                            </div>
                        </div>
                        <div class="quote-creative__main">
                            <div class="quote-creative__mark">
                                <svg version="1.1" x="0px" y="0px" width="39px" height="21px" viewbox="0 0 39 21">
                                    <polyline points="8.955,21 0,14.031 0.002,0.001 15.984,0.001 15.984,13.984 8.969,14.016 "></polyline>
                                    <polyline points="31.97,20.999 23.016,14.031 23.018,0.001 39,0.001 39,13.984 31.984,14.015 "></polyline>
                                </svg>
                            </div>
                            <div class="quote-creative__main-text">
                                <p>{{$client->details}}</p>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="owl-outer-navigation" id="owl-carousel-nav"></div>
        </div>
            </div>
        </div>
    </div>
</section>
