<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Links;

class pageController extends Controller
{

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function photos()
    {
        return view('frontend.pages.imageGallery');
    }

    public function videos()
    {
        return view('frontend.pages.videoGallery');
    }

    public function overview()
    {
        return view('frontend.pages.projectOverview');
    }

    public function goal()
    {
        return view('frontend.pages.projectGoal');
    }

    public function mission()
    {
        return view('frontend.pages.mission');
    }

    public function workingarea()
    {
        return view('frontend.pages.workingArea');
    }

    public function entrepreneurs()
    {
        return view('frontend.pages.entrepreneurs');
    }

    public function success()
    {
        return view('frontend.pages.successStories');
    }

//    public function calender()
//    {
//        return view('frontend.pages.calender');
//    }

    public function events()
    {
        return view('frontend.pages.events.events');
    }

    public function event($id)
    {
        $event = getEvents($id);
        return view('frontend.pages.events.event', ['event' => $event]);
    }

    public function news()
    {
        return view('frontend.pages.news.news');
    }

    public function newsMore($id)
    {
        $news = getNews($id);
        return view('frontend.pages.news.newsMore', ['news' => $news]);
    }

//    public function topics()
//    {
//        return view('frontend.pages.blog');
//    }

    public function activities()
    {
        return view('frontend.pages.activities.activities');
    }

    public function activity($id)
    {
        $activities = activities($id);
        return view('frontend.pages.activities.activity', ['activities' => $activities]);
    }

    public function stories()
    {
        return view('frontend.pages.success.stories');
    }

    public function story($id)
    {
        $story = success($id);
        return view('frontend.pages.success.story', ['story' => $story]);
    }

    public function blogs()
    {
        return view('frontend.pages.blogs.blogs');
    }

    public function blog($id)
    {
        $blog = getBlogs($id);
        return view('frontend.pages.blogs.blog', ['blog' => $blog]);
    }

    public function notices()
    {
        return view('frontend.pages.notice.notices');
    }

    public function notice($id)
    {
        $notice = getNotices($id);
        return view('frontend.pages.notice.notice',['notice'=>$notice]);
    }


}
