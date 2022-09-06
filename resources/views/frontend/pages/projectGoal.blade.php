@extends('layouts.frontend')
@section('title','Goal')
@section('content')
    @php
        $abouts = getAbout();
    @endphp
    <!-- page title -->
    <div class="row bg-dark-cu page-title">
        <div class="col-md-12 page-titles">
            <a href="{{url('/')}}">home</a>
            <a href="{{url('faq')}}">Goal</a>
        </div>
    </div> <!-- page title end -->
    <div class="project_summary bg-white-cu content-100">
        <div class="row content-80">
            @php
                $row = count(json_decode($abouts, true));
            @endphp
            @if ($row > 0)
                @for ($i = 0; $i < $row; $i++)
                    @php
                        if ($abouts[$i]->project_goal !== null){
                            $goal = $abouts[$i]->project_goal;
                            break;
                        } else {
                            $goal = '';
                        }
                    @endphp
                @endfor
            @endif
            <div class="project-summary-more">
                <p>{{$goal}}</p>
            </div>

        </div>
    </div>

@endsection
