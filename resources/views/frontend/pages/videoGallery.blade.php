@extends('layouts.frontend')
@section('title','Videos')
@section('content')
    <!-- page title -->
    <div class="row bg-dark-cu page-title">
        <div class="col-md-12 page-titles">
            <a href="{{url('/')}}">home</a>
            <a href="{{url('faq')}}">videos</a>
        </div>
    </div> <!-- page title end -->

    <div class="project_summary bg-dark-cu content-100">
        <div class="row content-80 ">

            <div class="col-md-12 sub-container gallery">
                <div class="heading">
                    <span class="heading-1">Video</span>
                    <span class="heading-2">Gallery</span>
                </div>
                <div class="row videos">
                    <div class="row">
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Sqqj_14wBxU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Sqqj_14wBxU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Sqqj_14wBxU"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4"><iframe width="560" height="315" src="https://www.youtube.com/embed/FJELl8C0no8"
                                                      title="YouTube video player" frameborder="0"
                                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                      allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe width="560" height="315" src="https://www.youtube.com/embed/FJELl8C0no8"
                                                      title="YouTube video player" frameborder="0"
                                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                      allowfullscreen></iframe></div>
                        <div class="col-md-4"><iframe width="560" height="315" src="https://www.youtube.com/embed/FJELl8C0no8"
                                                      title="YouTube video player" frameborder="0"
                                                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                      allowfullscreen></iframe></div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/FJELl8C0no8"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/FJELl8C0no8"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="col-md-4">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/FJELl8C0no8"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
