@extends('layouts.frontend')
@section('title','Overview')
@section('content')
    @php
        $abouts = getAbout();
    @endphp
    <!-- page title -->
    <div class="row bg-dark-cu page-title">
        <div class="col-md-12 page-titles">
            <a href="{{url('/')}}">home</a>
            <a href="{{url('faq')}}">overview</a>
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
                        if ($abouts[$i]->project_overview !== null){
                            $overView = $abouts[$i]->project_overview;
                            break;
                        } else {
                            $overView = '';
                        }
                    @endphp
                @endfor
            @endif
            <div class="project-summary-more">
                <p>{{$overView}}</p>
            </div>

        </div>
    </div>

@endsection
