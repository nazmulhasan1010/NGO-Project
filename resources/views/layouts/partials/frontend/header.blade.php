<!-- contact modal -->
@php
    $communication = getCommunication();
@endphp
<div class="contact_modal">
    <div class="left">

        @foreach($communication['contact'] as $contacts)
            <p><i class="fa-solid fa-envelope"></i>{{$contacts->contactMail}} </p>
            <p><i class="fa-solid fa-phone"></i> {{$contacts->contactNumber}}</p>
        @endforeach
    </div>
    <div class="right d-flex justify-content-end">
        <div class="lan_cng_btn" id="lanBtn">
            <label class="lanEnOn on">EN</label>
            <label class="lanBnOn off">BN</label>
        </div>
        <input type="radio" name="on" id="lanStatus" value="0" hidden>
    </div>
</div><!-- contact modal end -->

<!-- header  -->
<header class="header d-flex justify-content-between " id="header">
    <div class="header_content left">
        @php
            $logo = getLogo('primary');
            $logoImg ='assets/frontend/img-icon/pksf.jpeg';
            if (count($logo)>0){
                $logoImg = 'storage/'. $logo[0]->image;
            }
            $logo_2 = getLogo('secondary');
            $logoImg_2 ='assets/frontend/img-icon/ngf_logo.jpg';
            if (count($logo_2)>0){
                $logoImg_2 = 'storage/'. $logo_2[0]->image;
            }
        @endphp
        <a href="{{url('/')}}"><img src="{{asset($logoImg)}}" alt="" class="logo"></a>
        <a href="#"><img src="{{asset($logoImg_2)}}" alt="" class="logo logo-2"></a>
    </div>
    <div class="header_content menu_bar" id="menuBar">
        <i class="fa-solid fa-bars menu-ico-more" id="menuShow"></i>
        <!-- <i class="fa-solid fa-ellipsis-vertical menu-ico"></i> -->
        <div class="menus">
            <div class="menu-head">
                <img src="{{asset('assets/frontend/img-icon/pksf.jpeg')}}" alt="">
                <i class="fa-solid fa-xmark " id="menuClose"></i>
            </div>

            <ul>
                <li class="active">
                    <div class="option-head">About<i class="fa-solid fa-caret-right"></i></div>
                    <div class="option-main">
                        <div class="menu-option">
                            <a href="{{url('overview')}}">
                                <div class="options">Project Overview</div>
                            </a>
                            <a href="{{url('goal')}}">
                                <div class="options">Project goal</div>
                            </a>
                            <a href="{{url('workingarea')}}">
                                <div class="options">working area</div>
                            </a>
                            <a href="{{url('mission')}}">
                                <div class="options">mission</div>
                            </a>
                            <a href="{{url('gallery/photos')}}">
                                <div class="options">Image gallery</div>
                            </a>
                            <a href="{{url('')}}">
                                <div class="options">values</div>
                            </a>
                        </div>
                    </div>
                </li>
                <a href="{{url('entrepreneurs')}}">
                    <li>
                        <div class="option-head">Entrepreneurs</div>
                    </li>
                </a>

                <a href="{{url('stories')}}">
                    <li>
                        <div class="option-head">Success Stories</div>
                    </li>
                </a>

                <a href="{{url('/faq')}}">
                    <li>
                        <div class="option-head">FAQ</div>
                    </li>
                </a>
                <a href="{{url('events')}}">
                    <li>
                        <div class="option-head">Events</div>
                    </li>
                </a>
                <a href="{{url('newses')}}">
                    <li>
                        <div class="option-head">News</div>
                    </li>
                </a>
                <a href="{{url('blogs')}}">
                    <li>
                        <div class="option-head">Blog</div>
                    </li>
                </a>
                <a href="{{url('notices')}}">
                    <li>
                        <div class="option-head">Notice</div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</header><!-- header end -->
