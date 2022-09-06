<!-- project summary -->
<div class="project_summary bg-white-cu content-100">
    <div class="heading">
        <span class="heading-1">Project</span>
        <span class="heading-2">Summary</span>
    </div>
    <div class="row content-80">

        {{--        project overview      --}}

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
        @if($overView!=='')
            @php
                if (strlen($overView)>145){
                   $overView_ = substr($overView,0,145);
                }else{
                    $overView_ = $overView ;
                }
            @endphp
            <div class="col-md-4 summary">
                <div class="icon">
                    <img src="{{asset('assets/frontend/img-icon/analysis.png')}}" alt="summary">
                </div>
                <h2>Project Overview</h2>
                <p>{{$overView_}}</p>
                <a href="{{url('overview')}}">
                    <button type="button" class="more-button">Learn more</button>
                </a>
            </div>
        @endif

        {{--   project goal    --}}

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
        @if($goal!=='')
            @php
                if (strlen($goal)>145){
                   $goal_ = substr($goal,0,145);
                }else{
                     $goal_ = $goal ;
                }
            @endphp
            <div class="col-md-4 summary">
                <div class="icon">
                    <img src="{{asset('assets/frontend/img-icon/target.png')}}" alt="summary">
                </div>
                <h2>Project Goal</h2>
                <p>{{$goal_}}</p>
                <a href="{{url('goal')}}">
                    <button type="button" class="more-button">Learn more</button>
                </a>
            </div>
        @endif

        {{--   project goal    --}}

        @php
            $row = count(json_decode($abouts, true));
        @endphp
        @if ($row > 0)
            @for ($i = 0; $i < $row; $i++)
                @php
                    if ($abouts[$i]->mission !== null){
                        $mission = $abouts[$i]->mission;
                        break;
                    } else {
                        $mission = '';
                    }
                @endphp
            @endfor
        @endif
        @if($mission!=='')
            @php
                if (strlen($mission)>145){
                   $mission_ = substr($mission,0,145);
                }else{
                     $mission_ = $mission ;
                }
            @endphp
            <div class="col-md-4 summary">
                <div class="icon">
                    <img src="{{asset('assets/frontend/img-icon/mission.png')}}" alt="summary">
                </div>
                <h2>Project Mission</h2>
                <p>{{$mission_}}</p>
                <a href="{{url('mission')}}">
                    <button type="button" class="more-button">Learn more</button>
                </a>
            </div>
        @endif
    </div>
</div><!-- project summary end -->
