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

    public function calender()
    {
        return view('frontend.pages.calender');
    }

    public function events()
    {
        return view('frontend.pages.events');
    }

    public function news()
    {
        return view('frontend.pages.news');
    }

    public function topics()
    {
        return view('frontend.pages.topics');
    }

    public function notice()
    {
        return view('frontend.pages.notice');
    }

    public function activities()
    {
        return view('frontend.pages.activities.activities');
    }

    public function activity($id)
    {
        $activities = activities($id);
        return view('frontend.pages.activities.activity', ['activities' => $activities]);
    }
    public function stories(){
        return view('frontend.pages.success.stories');
    }

    public function story($id)
    {
        $story = success($id);
        return view('frontend.pages.success.story', ['story' => $story]);
    }

}
