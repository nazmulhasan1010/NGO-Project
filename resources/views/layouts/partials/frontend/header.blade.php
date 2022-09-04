<!-- contact modal -->
<div class="contact_modal">
    <div class="left">
        <p><i class="fa-solid fa-envelope"></i> example@gmail.com</p>
        <p><i class="fa-solid fa-phone"></i> 0167272882</p>
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
        <a href="{{url('/')}}"><img src="{{asset('assets/frontend/img-icon/pksf.jpeg')}}" alt="" class="logo"></a>
        <a href="#"><img src="{{asset('assets/frontend/img-icon/ngf_logo.jpg')}}" alt="" class="logo logo-2"></a>
    </div>
    <div class="header_content menu_bar" id="menuBar">
        <i class="fa-solid fa-bars menu-ico-more" id="menuShow"></i>
        <!-- <i class="fa-solid fa-ellipsis-vertical menu-ico"></i> -->
        <div class="menus" >
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

                <li>
                    <div class="option-head">Success Stories<i class="fa-solid fa-caret-right"></i></div>
                    <div class="option-main">
                        <div class="menu-option">
                            <a href="{{url('success')}}">
                                <div class="options">success</div>
                            </a>
                            <a href="{{url('')}}">
                                <div class="options">Project goal</div>
                            </a>
                            <a href="{{url('')}}">
                                <div class="options">working area</div>
                            </a>
                            <a href="{{url('')}}">
                                <div class="options">mission</div>
                            </a>
                            <a href="{{url('')}}">
                                <div class="options">Image gallery</div>
                            </a>
                            <a href="{{url('')}}">
                                <div class="options">values</div>
                            </a>
                        </div>
                    </div>
                </li>

                <a href="{{url('/faq')}}">
                    <li>
                        <div class="option-head">FAQ</div>
                    </li>
                </a>
                <a href="{{url('calender')}}">
                    <li>
                        <div class="option-head">Calender</div>
                    </li>
                </a>
                <a href="{{url('events')}}">
                    <li>
                        <div class="option-head">Events</div>
                    </li>
                </a>
                <a href="{{url('news')}}">
                    <li>
                        <div class="option-head">News</div>
                    </li>
                </a>
                <a href="{{url('topics')}}">
                    <li>
                        <div class="option-head">Topics</div>
                    </li>
                </a>
                <a href="{{url('notice')}}">
                    <li>
                        <div class="option-head">Notice</div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</header><!-- header end -->
