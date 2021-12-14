<section class="breadcrumbs-custom">
    <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{asset('/')}}ui-asset/images/bg-image-1-1920x238.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ucwords(str_replace('-',' ',$name))}}</h2>
        </div>
    </div>
    <div class="breadcrumbs-custom__main bg-gray-light">
        <div class="container">
            <ul class="breadcrumbs-custom__path">
                <li><a href="{{route('/')}}">Home</a></li>
                @if(!empty($banner_title))
                    <li>
                        <a href="{{route('banner-list')}}">{{ucwords(str_replace('-',' ',$name))}}</a>
                    </li>
                    <li class="active">{{ucwords($banner_title)}}</li>
                @elseif(!empty($service_title))
                    <li>
                        <a href="{{route('service-list')}}">{{ucwords(str_replace('-',' ',$name))}}</a>
                    </li>
                    <li class="active">{{ucwords($service_title)}}</li>
                @elseif(!empty($news_title))
                    <li>
                        <a href="{{route('news-list')}}">{{ucwords(str_replace('-',' ',$name))}}</a>
                    </li>
                    <li class="active">{{ucwords($news_title)}}</li>
                @else
                    <li class="active">{{ucwords(str_replace('-',' ',$name))}}</li>
                @endif
            </ul>
        </div>
    </div>
</section>
