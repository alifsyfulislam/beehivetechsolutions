@extends('master')


@section('title')
    {{$name == "/" ? "Beehive | Home" : ucwords(str_replace('-',' ',$name))}}
@endsection


@section('body')
    {{--slider--}}
    @include('ui.component.banner')
    {{--service--}}
    @include('ui.component.service')
    {{--choose--}}
    @include('ui.component.choose')
    {{--facts--}}
    @include('ui.component.facts')
    {{--clients--}}
    <!-- @include('ui.component.clients') -->
@endsection
