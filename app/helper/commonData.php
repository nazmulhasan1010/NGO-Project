<?php


use App\Models\Contacts;
use App\Models\Links;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use App\Models\Beneficiary;
use App\Models\About;
use App\Models\Workingarea;
use App\Models\Activity;
use App\Models\FAQ;
use App\Models\SuccessStories;

if (!function_exists('getCommunication')) {
    function getCommunication(): array
    {
        $contact = Contacts::latest()->take(1)->get();
        $links = Links::latest()->take(1)->get();
        return [
            'contact' => $contact,
            'links' => $links
        ];
    }
}
if (!function_exists('getImage')) {
    function getImage()
    {
        return ImageGallery::latest()->get();
    }
}
if (!function_exists('getVideo')) {
    function getVideo()
    {
        return VideoGallery::latest()->get();
    }
}
if (!function_exists('getEnterprise')) {
    function getEnterprise()
    {
        return Beneficiary::latest()->get();
    }
}
if (!function_exists('getAbout')) {
    function getAbout()
    {
        return About::latest()->get();
    }
}
if (!function_exists('getWorkingArea')) {
    function getWorkingArea()
    {
        return Workingarea::latest()->first();
    }
}
if (!function_exists('activities')) {
    function activities($id)
    {
        if ($id == 'all') {
            return Activity::latest()->get();
        } else {
            return Activity::where('id', '=', $id)->get();
        }
    }
}

if (!function_exists('getFaq')) {
    function getFaq()
    {
        return FAQ::latest()->get();
    }
}

if (!function_exists('success')) {
    function success($id)
    {
        if ($id == 'all') {
            return SuccessStories::latest()->get();
        } else {
            return SuccessStories::where('id', '=', $id)->get();
        }
    }
}
if (!function_exists('getLatestStory')){
    function getLatestStory(){
        return SuccessStories::latest()->take(1)->get();
    }
}
