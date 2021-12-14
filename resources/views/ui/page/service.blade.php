@extends('master')


@section('title')
    {{"Beehive | $name"}}
@endsection


@section('body')
    {{--breadcrumbs--}}
    @include('ui.common.breadcrumbs')
    {{--details--}}
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row row-50 justify-content-md-center justify-content-lg-start">
                <div class="col-md-10 col-lg-10">
                    <div class="image-custom-1">
                        <img src="{{asset('/')}}ui-asset/images/about-1-601x359.jpg" alt="" width="601" height="359"/>
                    </div>
                </div>
                <div class="col-md-10 col-lg-10">
                    <div class="box-inset-1">
                        <!-- Bootstrap tabs-->
                        <p class="text-justify">
                            Staying up-to-date with the universe of design is significant because there is no limit to planning, as everyone knows. It is constantly changing, with new concepts emerging and old ideas returning to be polished. We do not want our customers to fall into obscurity. Whether customers are looking for a spectacular new logo, business card, attractive banner, stationery, stunning flyers, outstanding posters, and web design for their company or brand, the expert community of designers at Beehive Tech Solutions can make it happen.
                        </p>
                        <p class="text-justify">
                            Websites, infographics, typography, and other sections related to visual interfaces are all much more than just words and products; they are also images and art. Visuals convert faster than words alone. Visual presentation impacts a better understanding of customers’ products and services and helps them see the benefits they offer. Graphic design is a vital part of any business, and that is as true for a customer's company or brand image as it is for their marketing.
                        </p>
                        <p class="text-justify">
                            At Beehive Tech Solutions, we offer a multitude of graphic design services and more. Customers are aware of their company's operations, and websites rely far too heavily on what everyone displays among them.
                        </p>
                        <p>
                            <span class="font-weight-bold">Logo Design:</span> This shows a strong brand identity.
                        </p>
                        <p>
                            <span class="font-weight-bold">Brochure Design:</span> Brochure design is a process of converting customers by using altered media.
                        </p>
                        <p>
                            <span class="font-weight-bold">Flyer Design:</span> Flyers are the best tools for corporate marketing.
                        </p>
                        <p>
                            <span class="font-weight-bold">Newsletter Designing:</span> Be in touch with customers by designing newsletters.
                        </p>
                        <p>
                            <span class="font-weight-bold">Stationery Designs:</span> We accelerate customers' first impressions of their business.
                        </p>
                        <p>
                            <span class="font-weight-bold">UI/UX Design:</span> User interfaces enable users to understand and create impressions to get clicks based on their experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--choose--}}
    @include('ui.component.choose')
    {{--facts--}}
    @include('ui.component.facts')
    {{--clients--}}
    <!-- @include('ui.component.clients') -->
@endsection