<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\OurStory;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $tourcategories=TourCategory::all();
        $tours=Tour::all();
        $ourstory=OurStory::first();
        $blogs=Blog::all();
        return view('frontend.index', compact('banners', 'tours','tourcategories','ourstory', 'blogs'));
    }

    public function apply()
    {

    }
}
