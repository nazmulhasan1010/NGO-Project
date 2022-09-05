<!-- project summary -->
<div class="project_summary bg-white-cu content-100">
    <div class="heading">
        <span class="heading-1">Project</span>
        <span class="heading-2">Summary</span>
    </div>
    <div class="row content-80">
        @if($abouts[0]->project_overview)
            @php
                if (strlen($abouts[0]->project_overview)>145){
                   $overView = substr($abouts[0]->project_overview,0,145);
                }else{
                    $overView = $abouts[0]->project_overview ;
                }
            @endphp
            <div class="col-md-4 summary">
                <div class="icon">
                    <img src="{{asset('assets/frontend/img-icon/analysis.png')}}" alt="summary">
                </div>
                <h2>Project Overview</h2>
                <p>{{$overView}}</p>
                <a href="#">
                    <button type="button" class="more-button">Learn more</button>
                </a>
            </div>
        @endif
        @if($abouts[0]->project_goal)
                @php
                    if (strlen($abouts[0]->project_goal)>145){
                       $goal = substr($abouts[0]->project_goal,0,145);
                    }else{
                         $goal = $abouts[0]->project_goal ;
                    }
                @endphp
            <div class="col-md-4 summary">
                <div class="icon">
                    <img src="{{asset('assets/frontend/img-icon/target.png')}}" alt="summary">
                </div>
                <h2>Project Goal</h2>
                <p>{{$goal}}</p>
                <a href="#">
                    <button type="button" class="more-button">Learn more</button>
                </a>
            </div>
        @endif
        @if($abouts[0]->mission)
                @php
                    if (strlen($abouts[0]->mission)>145){
                       $mission = substr($abouts[0]->mission,0,145);
                    }else{
                         $mission = $abouts[0]->mission ;
                    }
                @endphp
            <div class="col-md-4 summary">
                <div class="icon">
                    <img src="{{asset('assets/frontend/img-icon/mission.png')}}" alt="summary">
                </div>
                <h2>Project Mission</h2>
                <p>{{$mission}}</p>
                <a href="#">
                    <button type="button" class="more-button">Learn more</button>
                </a>
            </div>
        @endif
    </div>
</div><!-- project summary end -->
