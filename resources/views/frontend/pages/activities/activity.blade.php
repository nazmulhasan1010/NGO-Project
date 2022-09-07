@extends('layouts.frontend')
@section('title','Activity')
@section('content')
    <!-- page title -->
    <div class="row bg-dark-cu page-title">
        <div class="col-md-12 page-titles">
            <a href="{{url('/')}}">home</a>
            <a href="{{url('activities')}}">Activities</a>
            <a href="{{url('faq')}}">Activity</a>
        </div>
    </div> <!-- page title end -->

    <!-- project activities -->
    @if($activities)
        <div class="project_summary bg-white-cu content-100">
            <div class="heading">
                <span class="heading-1">Project</span>
                <span class="heading-2">Activities</span>
            </div>
            <div class="row content-80 activity show">
                @foreach($activities as $activity )
                    @if($activity->status==1)
                        <div class="col-md-4 activities">
                            <img src="{{asset('storage/' . $activity->image)}}" alt="">
                            <div class="info-field ">
                                <h2>{{$activity->title}}</h2>
                                {!! $activity->description  !!}
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div><!-- project activities end -->
    @endif


@endsection
