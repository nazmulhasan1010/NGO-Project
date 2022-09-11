@extends('layouts.frontend')
@section('title','Blog')
@section('content')
    @include('layouts.partials.frontend.pageTitle')
    @php
        $blogs = getBlogs('all');
    @endphp

    <div class="project_summary bg-dark-cu content-100 success">
        <div class="row content-80 border-bottom-">
            <div class="col-md-8 successes">
                @foreach($blogs as $blog)
                    @if($blog->status===1)
                        <img src="{{asset('storage/'.$blog->image)}}" alt="">
                        <div class="info-field">
                            @php
                                if (strlen($blog->description)>500){
                                   $description = substr($blog->description,0,500).'...';
                                }else{
                                    $description = $blog->description ;
                                }
                            @endphp
                            <div class="date">
                                <span><i class="fa-regular fa-clock"></i></span>
                                <span>{{date("d", strtotime($blog->updated_at)).' '.substr(date("F", strtotime($blog->updated_at)),0,3).'  '.date("Y", strtotime($blog->updated_at)) }}</span>
                            </div>
                            <h2>{{$blog->title}}</h2>
                            <p>{{$description}}</p>
                            <p>{{$blog->address}}</p>
                            <a href="{{url('blog/'.$blog->id)}}">
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
                @include('frontend.pages.component.latestPost')
            </div>
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
