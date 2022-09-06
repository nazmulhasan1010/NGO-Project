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

    function photos()
    {
        return view('frontend.pages.imageGallery');
    }

    function videos()
    {
        return view('frontend.pages.videoGallery');
    }

    function overview()
    {
        return view('frontend.pages.projectOverview');
    }

    function goal()
    {
        return view('frontend.pages.projectGoal');
    }

    function mission()
    {
        return view('frontend.pages.mission');
    }

    function workingarea()
    {
        return view('frontend.pages.workingArea');
    }

    function entrepreneurs()
    {
        return view('frontend.pages.entrepreneurs');
    }

    function success()
    {
        return view('frontend.pages.successStories');
    }

    function calender()
    {
        return view('frontend.pages.calender');
    }

    function events()
    {
        return view('frontend.pages.events');
    }

    function news()
    {
        return view('frontend.pages.news');
    }

    function topics()
    {
        return view('frontend.pages.topics');
    }

    function notice()
    {
        return view('frontend.pages.notice');
    }
}
