<!-- micro enterprises location -->
@if($enterprises)

    <div class="project_summary bg-dark-cu content-100">
        <div class="heading">
            <span class="heading-1">Enterprise</span>
            <span class="heading-2">Location</span>
        </div>
        <div class="row content-80 enterprise">
            @foreach($enterprises as $enterprise)
                @if($enterprise->status==1)
                    <div class="col-md-4 enterprises">
                        <div class="en-location-map">
                            {!! $enterprise->mapLink !!}
                        </div>
                        <div class="info-field">
                            @php
                                if (strlen($enterprise->title)>22){
                                   $title = substr($enterprise->title,0,22);
                                }else{
                                    $title = $enterprise->title ;
                                }
                            @endphp
                            <h2>{{$title}}</h2>
                            <p class="contact-num">{{$enterprise->contact}}</p>
                            <p>{{$enterprise->address}}</p>
                            <a href="#">
                                <button type="button" class="more-button">View Map</button>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <a href="#">
            <button type="button" class="more-button see-all">See All <i
                    class="fa-solid fa-angles-right"></i></button>
        </a>
    </div> <!-- micro enterprises location end -->
@endif
