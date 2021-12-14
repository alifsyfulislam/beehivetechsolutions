@extends('master')


@section('title')
    {{"Beehive | ".ucwords(str_replace('-',' ',$name))}}
@endsection


@section('body')
    {{--breadcrumbs--}}
    @include('ui.common.breadcrumbs')
    {{--details--}}
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row row-50 justify-content-md-center justify-content-lg-start">
                @foreach($services as $service)
                    <div class="col-md-12 col-lg-12">
                        <div class="row about-area">
                            <!-- About Image -->

                            <!-- About Content -->
                            <div class="about-content  col-md-12 col-xs-12">
                                <img src=" {{$service->media->url}}" style="height: 50px; width: 50px" alt="">
                                <b>  <h3 class="service-content">{{$service->title}}</h3></b>
                                <p> {{substr($service->details, 0,200).'...'}}</p>
                                <a class="btn" href="{{route('service.by.slug',['slug' => $service->slug])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $services->links() !!}
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