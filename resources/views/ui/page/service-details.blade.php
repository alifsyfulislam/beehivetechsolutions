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
                    <div class="box-inset-1 service-details-section ">
                       <div class="text-center">
                         <img src="{{$service->media->url}}" style="height: 50px; width: 50px; margin: 5px" alt="banner not found"/>
                       </div>
                       <div class="text-center">
                           <h3>{{$service->title}}</h3>
                           <!-- <small>Post by: {{$service->user->email}}</small>
                           <small>Post on: {{$service->created_at}}</small> -->
                       </div>

                        <p class="">{{$service->details}}</p>
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