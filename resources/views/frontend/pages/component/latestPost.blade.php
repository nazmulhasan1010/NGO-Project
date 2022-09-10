@foreach(getLatestStory() as $latestStory)
    @if($latestStory->status == 1)
        <a href="{{url('story/'.$latestStory->id)}}" class="row latest-post-links">
            <div class="col-md-6 lp-links ">
                <img src="{{asset('storage/'.$latestStory->image)}}" alt="">
            </div>
            <div class="col-md-6 lp-links">
                <div class="date">
                    <span><i class="fa-regular fa-clock"></i></span>
                    <span>{{date("d", strtotime($latestStory->updated_at)).'  '.substr(date("F", strtotime($latestStory->updated_at)),0,3).'  '.date("Y", strtotime($latestStory->updated_at)) }}</span>
                </div>
                <h2>{{$latestStory->title}}</h2>
                @php
                    if (strlen($latestStory->description)>50){
                   $des_ls = substr($latestStory->description,0,50).'...';
                }else{
                    $des_ls = $latestStory->description ;
                }
                @endphp
                <p>{{$des_ls}}</p>
            </div>
        </a>
    @endif
@endforeach
