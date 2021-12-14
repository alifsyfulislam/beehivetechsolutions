@extends('master')


@section('title')
    {{"Beehive | $name"}}
@endsection


@section('body')
    {{--breadcrumbs--}}
    @include('ui.common.breadcrumbs')
    <section class="section section-md bg-gray-light">
        <div class="container">
            <!-- Bootstrap tabs-->
            <div class="card-group card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="row row-30">
                    @foreach($faqs as $faq)
                        <div class="col-lg-12">
                            <!-- Bootstrap card-->
                            <div class="card card-custom card-corporate">
                                <div class="card-heading" id="accordion1Heading10" role="tab">
                                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-{{$faq->id}}" href="#accordion-{{$faq->id}}" aria-controls="accordion-{{$faq->id}}">{{$faq->title}}
                                            <div class="card-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="card-collapse collapse" id="accordion-{{$faq->id}}" role="tabpanel" aria-labelledby="accordion1Heading10">
                                    <div class="card-body">
{{--                                        <p>{{$faq->type}}</p>--}}
                                        <p>{{$faq->details}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Bootstrap card-->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection