@extends('layouts.frontend')
@section('title','Working Area')
@section('content')
    @php
        $area = getWorkingArea();
    @endphp
    <!-- page title -->
    <div class="row bg-dark-cu page-title">
        <div class="col-md-12 page-titles">
            <a href="{{url('/')}}">home</a>
            <a href="{{url('faq')}}">working area</a>
        </div>
    </div> <!-- page title end -->

    <div class="project_summary bg-dark-cu content-100">
        <div class="row content-80 ">
            <div class="col-md-12 working-area working-area-12">
                <img src="{{asset('storage/' . $area->image)}}" alt="">
            </div>
            <div class="col-md-12 working-area working-area-12">
                <h2>{{$area->area}}</h2>
                <p>{{$area->description}}</p>
            </div>
        </div>
    </div>


@endsection
