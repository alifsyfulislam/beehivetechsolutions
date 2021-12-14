@extends('master')


@section('title')
    {{"Beehive | ".ucwords(str_replace('-',' ',$name))}}
@endsection


@section('body')
    {{--breadcrumbs--}}
    @include('ui.common.breadcrumbs')
    {{--information--}}
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row row-50 justify-content-md-center justify-content-lg-start">
                <div class="col-md-10 col-lg-12">
                    <div class="box-inset-1">
                        <div class="tabs-custom tabs-horizontal tabs-corporate tabs-corporate_left" id="tabs-about">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#tabs-about-1" data-toggle="tab">What we do</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabs-about-2" data-toggle="tab">Who we are</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabs-about-3" data-toggle="tab">Our Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabs-about-4" data-toggle="tab">Our Vision</a></li>
                            </ul>
                            {{--tab panes--}}
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-about-1">
                                    <p class="text-justify">
                                        Beehive Tech Solutions was founded by a team of enthusiastic tech specialists those who wanted to conquer the system and create a company that would act in the market for business success and the intent of technology itself. We consolidated our operations in all areas like Software Development, Web Design, Web Development, App Development, UI/UX Design, Graphics Design, Digital Marketing, Data Processing, E-Commerce Management, Search Engine Optimization, IP TV (Internet Protocol Television) Management (Setup and Broadcasting), Independent Testing and Validation Services to achieve high professional standards.
                                    </p>
                                    <p class="text-justify">
                                        We understand the needs of the clients and know how to serve their needs in the best possible way. Beehive Tech Solutions follows generic and specific processes, defined in its Quality Management System (QMS), to maintain the quality in every production phase. We offer cost-effective advancement services and solutions for clients with projects both large and medium. We engage highly qualified software developers and creative designers with years of experience. Mostly, we measure our success in customer delight.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tabs-about-2">
                                    <p class="text-justify">
                                        The team members of Beehive Tech Solutions are highly passionate about all kinds of tech-related services crafted to meet customer needs and work relentlessly to provide 24/7 assistance to our clients. We ensure our clients that their companies or brands are scalable and can be adapted to new market demands in the future. We can significantly help our clients to implement their Software Development, Web or App Design and Development, UX/UI Design, Graphics Design, E-Commerce Management, Digital Marketing, Data Processing, Search Engine Optimization, and Internet Protocol Television Management.
                                    </p>
                                    <p class="text-justify">
                                        We follow a standard, sophisticated pattern in the technology sector engaged in researching, developing, and manufacturing technology based goods and services. Our work adds extra value to the companies or brands of the clients.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tabs-about-3">
                                    <p class="text-justify">
                                        Our mission is to provide tech services with the collaboration of modern technologies, innovative ideas, intelligible communication skills, consultancy, and software system solutions through a highly motivated, creative, experienced, and ingenious team of professionals contributing to the success of Beehive Tech Solutions itself. Our vision for the outcome is the satisfaction and trust of our clients.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tabs-about-4">
                                    <p class="text-justify">
                                        Our vision is to promote our fame worldwide and digitize analog systems and offer high-quality tech service to the clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--team--}}
    @include('ui.component.team')
    {{--choose--}}
    @include('ui.component.choose')
    {{--facts--}}
    @include('ui.component.facts')
    {{--clients--}}
    {{--@include('front-end.display.clients')--}}
@endsection