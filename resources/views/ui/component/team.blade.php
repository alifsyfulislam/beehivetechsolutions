<section class="section section-lg bg-gray-lighter text-center">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="row row-50">
            @foreach($teams as $team)
                <div class="col-md-4 col-lg-4">
                    <article class="card-creative">
                        <div class="card-creative__inner">
                            <figure class="card-creative__media"><img src="{{$team->media->url}}" alt="" width="230" height="211"/></figure>
                            @if(!empty($team->middle_name))
                                <p class="card-creative__title">{{$team->first_name.' '.$team->middle_name.' '.$team->last_name}}</p>
                            @else
                                <p class="card-creative__title">{{$team->first_name.' '.$team->last_name}}</p>
                            @endif
                            <p class="card-creative__subtitle">{{$team->designation}}</p>
                            <div class="card-creative__divider"></div>
                            <div class="card-creative__aside">
                                {{--                                {{$data = explode(',',$team->social_links)}}--}}

                                <ul class="list-inline list-inline-md">
                                    @foreach($team->social_links as $key => $item)
                                        @if($key===0)
                                            <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-facebook" href="{{$item}}"></a></li>
                                        @elseif($key===1)
                                            <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-twitter" href="{{$item}}"></a></li>
                                        @elseif($key===2)
                                            <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-instagram" href="{{$item}}"></a></li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>