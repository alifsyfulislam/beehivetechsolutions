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

                <div class="col-md-12 col-lg-12">
                    <div class="image-custom-1" style="margin-bottom: 20px">
                        <img src="{{$news->media->url}}" style="height: 450px; width: 100%" alt="banner not found"/>
                    </div>
                    <div class="box-inset-1">
                        <h3>{{$news->news_title}}</h3>
                        <!-- <small>Post by: {{$news->user->email}}</small>
                        <small>Post on: {{$news->created_at}}</small> -->
                        <p>{{$news->details}}</p>
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