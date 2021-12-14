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
                @foreach($banners as $banner)
                    <div class="col-md-12 col-lg-12">
                        <div class="row about-area">
                            <!-- About Image -->
                            <div class="about-image col-md-3 col-xs-12 p-0"><img src=" {{$banner->media->url}}" alt=""></div>
                            <!-- About Content -->
                            <div class="about-content col-md-9 col-xs-12">
                                <b>  <h3>{{$banner->title}}</h3></b>
                                <p> {{substr($banner->details, 0,200).'...'}}</p>
                                <a class="btn" href="{{route('banner.by.slug',['slug' => $banner->slug])}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {!! $banners->links() !!}
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