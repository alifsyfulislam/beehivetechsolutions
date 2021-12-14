<header class="section page-header">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="74px" data-lg-stick-up-offset="66px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-outer">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{route('/')}}">
                                <div class="brand__name">
                                    <img class="brand__logo-dark" src="{{asset('/')}}ui-asset/images/logo-default-200x65.png" alt="" width="200" height="65"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-body">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-content-outer">
                                <div class="rd-navbar-content__toggle rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                                <div class="rd-navbar-content">
                                    <ul class="list-bordered list-inline">
                                        <li>
                                            <dl class="list-terms-inline">
                                                <dt>24/7 Support</dt>
                                                <dd><a href="tel:+8801975366900">+880 19753 66900</a></dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="list-terms-inline">
                                                <dt>E-mail</dt>
                                                <dd><a href="mailto:info@beehivetechsolutions.com">info@beehivetechsolutions.com</a></dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <ul class="list-inline list-inline-xs">
                                                <li><a target="_blank" class="pl-2 pr-2 icon icon-gray-dark icon-style-brand fa fa-facebook" href="https://www.facebook.com/beehivetechsolutions"></a></li>
                                                <li><a target="_blank" class="pl-2 pr-2 icon icon-gray-dark icon-style-brand fa fa-instagram" href="https://www.instagram.com/beehivetechsolutions/"></a></li>
                                                <li><a target="_blank" class="pl-2 pr-2 icon icon-gray-dark icon-style-brand fa fa-twitter" href="https://twitter.com/beehivetechsolu"></a></li>
                                                <li><a target="_blank" class="pl-2 pr-2 icon icon-gray-dark icon-style-brand fab fa-linkedin" href="https://www.linkedin.com/company/beehivtechsolutions"></a></li>
                                                <li><a target="_blank" class="pl-2 pr-2 icon icon-gray-dark icon-style-brand fa fa-pinterest-p" href="https://www.pinterest.com/beehivetechsolutionsbd/"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-element">
                                <div class="rd-navbar-panel__button">
                                    <a 
                                    	class="button button-xs button-icon button-icon-left button-default button-ujarak" 
                                    	href="https://www.beehivetechsolutions.com/admin/">
                                        <span class="icon mdi mdi-account"></span>Login
                                    </a>
                                </div>
                                <div class="rd-navbar-search rd-navbar-search-toggled">
                                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"></button>
                                    <form class="rd-search" action="#" data-search-live="rd-search-results-live" method="GET">
                                        <div class="form-wrap">
                                            <input class="form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="rd-navbar-search-submit" type="submit"></button>
                                        <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    </form>
                                </div>
                            </div>
                            <ul class="rd-navbar-nav">
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a href="{{route('/')}}">Home</a>
                                </li>
                                <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                    <a href="{{route('about-us')}}">About</a>
                                </li>
                                <li class="service_li {{ Request::is('service') ? 'active' : '' }}">
                                    <a href="{{route('service-list')}}">Services</a>
                                    <ul class="rd-navbar-megamenu">

                                        <li>
                                            <ul class="rd-megamenu-list">
                                                @foreach ($menus as $key => $item)
                                                    @if($key == 0 || $key < 4 )
                                                        <li><a href="{{route('service.by.slug',['slug' => $item->slug])}}">{{$item->title}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li>
                                            <ul class="rd-megamenu-list">
                                                @foreach ($menus as $key => $item)
                                                    @if($key >= 4 && $key < 7)
                                                        <li><a href="{{route('service.by.slug',['slug' => $item->slug])}}">{{$item->title}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>


                                        <li>
                                            <ul class="rd-megamenu-list">
                                                @foreach ($menus as $key => $item)
                                                    @if($key >= 7 && $key < 11)
                                                        <li><a href="{{route('service.by.slug',['slug' => $item->slug])}}">{{$item->title}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="{{ Request::is('news') ? 'active' : '' }}">
                                    <a href="{{route('news-list')}}">News</a>
                                </li>
                                <li class="{{ Request::is('faqs') ? 'active' : '' }}">
                                    <a href="{{route('faqs')}}">Faqs</a>
                                </li>
                                <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
