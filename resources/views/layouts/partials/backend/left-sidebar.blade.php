<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">

        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>

            <li><a class="has-arrow ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-circle-info"></i>
                    <span class="nav-text">About</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('about.index','inst=overview.project_overview')}}" class="ai-icon"
                           aria-expanded="false">

                            <i class="fa-solid fa-eye"></i>
                            <span class="nav-text">Project Overview</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about.index','inst=goal.project_goal')}}" class="ai-icon"
                           aria-expanded="false">
                            <i class="fa-brands fa-golang"></i>
                            <span class="nav-text">Project Goal</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about.index','inst=mission.mission')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-person-circle-exclamation"></i>
                            <span class="nav-text">Mission</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about.index','inst=values.values')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-tags"></i>
                            <span class="nav-text">Values</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('workingArea.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-briefcase"></i>
                            <span class="nav-text">Working area</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('component.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Component</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-images"></i>
                    <span class="nav-text">Gallery</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('imageGallery.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-image"></i>
                            <span class="nav-text">Photo Album</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('videoGallery.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-brands fa-youtube"></i>
                            <span class="nav-text">Video Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('successStories.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span class="nav-text">Success stories</span>
                </a>
            </li>
            <li>
                <a href="{{route('partner.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-handshake"></i>
                    <span class="nav-text">Development Partner</span>
                </a>
            </li>
            <li>
                <a href="{{route('slider.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-brands fa-medium"></i>
                    <span class="nav-text">Sliders</span>
                </a>
            </li>
            <li>
                <a href="{{route('activity.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="nav-text">Project Activities</span>
                </a>
            </li>
            <li>
                <a href="{{route('event.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-calendar-minus"></i>
                    <span class="nav-text">Upcoming Events</span>
                </a>
            </li>

            <li>
                <a href="{{route('notice.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-clipboard"></i>
                    <span class="nav-text">Notice & Job Circular</span>
                </a>
            </li>
            <li>
                <a href="{{route('faq.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-circle-question"></i>
                    <span class="nav-text">FAQ</span>
                </a>
            </li>
            <li>
                <a href="{{route('beneficiaryLocations.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-map-location"></i>
                    <span class="nav-text">Enterprise Location</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-book-bookmark"></i>
                    <span class="nav-text">Library</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('publication.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-book"></i>
                            <span class="nav-text">Publications</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('report.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-flag"></i>
                            <span class="nav-text">Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('news.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-radio"></i>
                            <span class="nav-text">News</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-burger"></i>
                    <span class="nav-text">About Food</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('foods.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="nav-text">Foods Ans Recipes</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('foodValue.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-bowl-food"></i>
                            <span class="nav-text">Food Value</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('foodDemand.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                            <span class="nav-text">Demand</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('product.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-brands fa-product-hunt"></i>
                            <span class="nav-text">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('recipe.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-plate-wheat"></i>
                            <span class="nav-text">Recipe</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-tower-cell"></i>
                    <span class="nav-text">Communication</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{route('contact.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-address-book"></i>
                            <span class="nav-text">Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('links.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="fa-solid fa-link"></i>
                            <span class="nav-text">Follow Links</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-label">Web Site</li>
            <li><a class="has-arrow ai-icon">
                    <span class="nav-text">Web Site</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
