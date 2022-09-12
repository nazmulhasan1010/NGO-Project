@extends('layouts.frontend')
@section('title','Events')
@section('content')
    @include('layouts.partials.frontend.pageTitle')
    <!-- event & notice -->
    <div class="project_summary bg-white-cu content-100">
        @include('frontend.pages.component.themeChanger')
        <div class="row content-80 event-notices event-show border-bottom-">
            @php
                $event = getEvents('all');
            @endphp
            @if($event)
                <div class="col-md-12 sub-container event-notice ">
                    <div class="heading">
                        <span class="heading-1">Upcoming</span>
                        <span class="heading-2">Events</span>
                    </div>
                    @foreach($event as $events)
                        @if($events->status===1)

                            <div class="row event">
                                <div class="col-md-4 events">
                                    <img src="{{asset('storage/' .$events->image)}}" alt="">
                                </div>
                                <div class="col-md-8 events ">
                                    @php
                                        if (strlen($events->title)>35){
                                           $title = substr($events->title,0,34);
                                        }else{
                                            $title = $events->title ;
                                        }
                                    @endphp
                                    <h4>{{$title}}</h4>
                                    <div class="event-date-place">
                                        <span>{{date("d", strtotime($events->start)).' '.substr(date("F", strtotime($events->start)),0,3).' '.date("Y", strtotime($events->start)) .' - ' .date("d", strtotime($events->end)).' '.substr(date("F", strtotime($events->end)),0,3).' ' .date("Y", strtotime($events->end))}}</span>
                                        <span>{{$events->place}}</span>
                                    </div>
                                    @php
                                        if (strlen($events->description)>600){
                                           $des = substr($events->description,0,600).'...';
                                        }else{
                                            $des = $events->description ;
                                        }
                                    @endphp
                                    <p>{{$des}}</p>
                                    <a href="{{url('event/'.$events->id)}}">
                                        <button type="button" class="more-button">Learn more</button>
                                    </a>
                                </div>
                            </div>

                        @endif
                    @endforeach
                </div>
            @endif
        </div>
        <nav aria-label="Page navigation example ">
            <ul class="pagination pagination-lg ">
                <li class="page-item bg-dark--">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

@endsection
