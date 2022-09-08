@extends('layouts.frontend')
@section('title','Stories')
@section('content')
    @php
        $stories = success('all');
    @endphp
        <!-- page title -->
    <div class="row bg-dark-cu page-title">
        <div class="col-md-12 page-titles">
            <a href="{{url('/')}}">home</a>
            <a href="{{url('faq')}}">Stories</a>
        </div>
    </div> <!-- page title end -->

    <div class="project_summary bg-dark-cu content-100 success">
        <div class="row content-80 ">
            <div class="col-md-8 successes">
                @foreach($stories as $stories_)
                    @if($stories_->status==1)
                        <img src="{{asset('storage/'.$stories_->image)}}" alt="">
                        <div class="info-field">
                            @php
                                if (strlen($stories_->description)>500){
                                   $description = substr($stories_->description,0,500).'...';
                                }else{
                                    $description = $stories_->description ;
                                }
                            @endphp
                            <div class="date">
                                <span><i class="fa-regular fa-clock"></i></span>
                                <span>{{date("d", strtotime($stories_->updated_at)).'  '.substr(date("F", strtotime($stories_->updated_at)),0,3).'  '.date("Y", strtotime($stories_->updated_at)) }}</span>
                            </div>
                            <h2>{{$stories_->title}}</h2>
                            <p>{{$description}}</p>
                            <p>{{$stories_->address}}</p>
                            <a href="{{url('story/'.$stories_->id)}}">
                                <button type="button" class="more-button ">
                                    Read More
                                </button>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 sub-container successes">
                <div class="heading">
                    <span class="heading-1">Latest</span>
                    <span class="heading-2">Post</span>
                </div>
                @foreach(getLatestStory() as $latestStory)
                    @if($latestStory->status == 1)
                        <a href="{{url('story/'.$latestStory->id)}}" class="row latest-post-links">
                            <div class="col-md-6 lp-links ">
                                <img src="{{asset('storage/'.$latestStory->image)}}" alt="">
                            </div>
                            <div class="col-md-6 lp-links">
                                <h2>{{$latestStory->title}}</h2>
                                <div class="date">
                                    <span><i class="fa-regular fa-clock"></i></span>
                                    <span>{{date("d", strtotime($latestStory->updated_at)).'  '.substr(date("F", strtotime($latestStory->updated_at)),0,3).'  '.date("Y", strtotime($latestStory->updated_at)) }}</span>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection