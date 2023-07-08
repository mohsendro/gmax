<?php
namespace App\Controllers;

use App\Models\Page;
use App\Models\Option;
use TypeRocket\Controllers\WPPostController;
use TypeRocket\Http\Request;

class PageController extends WPPostController
{
    protected $modelClass = Page::class;

    public function index(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page', compact('queried_object') );
    }

    public function webdesign(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-webdesign', compact('queried_object') );
    }

    public function seo(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-seo', compact('queried_object') );
    }

    public function google(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-google', compact('queried_object') );
    }

    public function youtube(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-youtube', compact('queried_object') );
    }

    public function services(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-services', compact('queried_object') );
    }

    public function monetization(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-monetization', compact('queried_object') );
    }

    public function studio(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-studio', compact('queried_object') );
    }

    public function fraudclicks(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-fraudclicks', compact('queried_object') );
    }

    public function about(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-about', compact('queried_object') );
    }

    public function contact(Page $page, Option $option)
    {
        $queried_object = get_queried_object();
        return tr_view('page-contact', compact('queried_object') );
    }
}
