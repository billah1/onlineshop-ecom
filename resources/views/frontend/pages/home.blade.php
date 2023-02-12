@extends('frontend.layouts.master')

@section('frontendtitle')
Homepage
@endsection

@section('frontend_content')
@include('frontend.pages.widgets.banner')
@include('frontend.pages.widgets.wrapper')
@include('frontend.pages.widgets.latest')
@include('frontend.pages.widgets.brand')

@endsection



