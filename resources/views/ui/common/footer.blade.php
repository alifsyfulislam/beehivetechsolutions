<footer class="section footer-classic">
    <div class="footer-classic__main bg-black-1">
        <div class="container">
            <div class="row row-50 justify-content-md-center justify-content-lg-start justify-content-xl-between">
                <div class="col-md-6 col-lg-6">
                    <p class="custom-heading-1 custom-heading-bordered">About us</p>
                    <div class="divider"></div>
                    <p class="ls-05 text-justify">Beehive Tech Solutions is the best compact pack of tech arrangements situated in Dhaka, Bangladesh. Fundamentally, the primary focal point of Beehive Tech Solutions is to understand clients' requests and get them going efficiently alongside excellent customer service. Our expert team is bound by an obligation to give priority to clients.
                        <br/>We bring all the tech services under one roof, keeping the quality of the goods precise so that they do not have to rush here and there for different services.
                    </p>

                    <p class="custom-heading-1 custom-heading-bordered">Useful Links</p>
                    <div class="divider"></div>
                    <div class="row row-5">
                        <div class="col-sm-12">
                            <ul class="list-inline list-inline-xs">
                                <li><a target="_blank" class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-facebook" href="https://www.facebook.com/beehivetechsolutions"></a></li>
                                <li><a target="_blank" class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-instagram" href="https://www.instagram.com/beehivetechsolutions/"></a></li>
                                <li><a target="_blank" class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-twitter" href="https://twitter.com/beehivetechsolu"></a></li>
                                <li><a target="_blank" class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-linkedin" href="https://www.linkedin.com/company/beehivtechsolutions"></a></li>
                                <li><a target="_blank" class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-pinterest-p" href="https://www.pinterest.com/beehivetechsolutionsbd/"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <p class="custom-heading-1 custom-heading-bordered">Latest news</p>
                    <div class="divider"></div>
                    <div class="post-small-wrap">
                        <!-- Post small-->
                        @foreach($newses as $key => $news)
                            @if($key==0 || $key < 3)
                                <article class="post-small">
                                    <div class="post-small__aside"><a class="post-small__media" href="{{route('news.by.slug',['slug' => $news->slug])}}"><img class="post-small__image" src="{{$news->media->url}}" alt="" width="auto" height="65"/></a></div>
                                    <div class="post-small__main">
                                        <p class="post-small__title"><a href="{{route('news.by.slug',['slug' => $news->slug])}}">{{$news->title}}</a></p>
                                        <time class="post-small__time" datetime="2018">{{$news->created_at}}</time>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-default__aside bg-gray-5">
        <div class="container">
            <div class="footer-default__aside-inner">
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Beehive Tech Solutions.</span></p>
                <ul class="list-separated list-inline">
                    <li><a href="{{route('faqs')}}">FAQS</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>