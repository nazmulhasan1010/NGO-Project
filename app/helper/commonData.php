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
use App\Models\Event;
use App\Models\News;
use App\Models\Blog;
use App\Models\Notice;

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
        if ($id === 'all') {
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
        if ($id === 'all') {
            return SuccessStories::latest()->get();
        } else {
            return SuccessStories::where('id', '=', $id)->get();
        }
    }
}
if (!function_exists('getLatest')) {
    function getLatest()
    {
        $success = SuccessStories::latest()->take(3)->get();
        $blog = Blog::latest()->take(3)->get();
        $news = News::latest()->take(3)->get();
        return [
            'story'=>$success,
            'blog'=>$blog,
            'news'=>$news
        ];
    }
}
if (!function_exists('getEvents')) {
    function getEvents($id)
    {
        if ($id === 'all') {
            return Event::get();
        } else {
            return Event::where('id', '=', $id)->get();
        }

    }
}
if (!function_exists('getNews')) {
    function getNews($id)
    {
        if ($id === 'all') {
            return News::get();
        } else {
            return News::where('id', '=', $id)->get();
        }

    }
}
if (!function_exists('getBlogs')) {
    function getBlogs($id)
    {
        if ($id === 'all') {
            return Blog::get();
        } else {
            return Blog::where('id', '=', $id)->get();
        }

    }
}
if(!function_exists('getNotices')){
    function getNotices($id){
        if ($id === 'all') {
            return Notice::get();
        } else {
            return Notice::where('id', '=', $id)->get();
        }
    }
}
