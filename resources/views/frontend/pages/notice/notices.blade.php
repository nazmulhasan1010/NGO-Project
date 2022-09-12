@extends('layouts.frontend')
@section('title','Notices')
@section('content')
    @include('layouts.partials.frontend.pageTitle')
    <!-- event & notice -->
    <div class="project_summary bg-white-cu content-100">
        @include('frontend.pages.component.themeChanger')
        <div class="row content-80 event-notices event-show border-bottom-">
            @php
                $notice = getNotices('all');
            @endphp
            @if($notice)
                <div class="col-md-6 sub-container event-notice ">
                    <div class="heading">
                        <span class="heading-1">Notice</span>
                    </div>
                    @foreach($notice as $notices)
                        @if($notices->status===1)
                            <div class="row notice">
                                <div class="col-md-2 notices">
                                    <div class="date">
                                        {{date('d',strtotime($notices->dateAt)).' '.substr(date('F',strtotime($notices->dateAt)),0,3).' '.date('Y',strtotime($notices->dateAt))}}
                                    </div>
                                </div>
                                <a href="{{url('notice/'.$notices->id)}}" class="col-md-10 notices">
                                    @php
                                        if (strlen($notices->title)>40){
                                           $title = substr($notices->title,0,39).'...';
                                        }else{
                                            $title = $notices->title ;
                                        }
                                    @endphp
                                    <h3>{{$title}}</h3>
                                    @php
                                        if (strlen($notices->description)>300){
                                           $des = substr($notices->description,0,299).'...';
                                        }else{
                                            $des = $notices->description ;
                                        }
                                    @endphp
                                    <p>{{$des}}</p>
                                </a>
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
