<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Team;
use App\Models\WhatWeOffer;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutus=AboutUs::first();
        $teams=Team::all();
        $whatweoffers=WhatWeOffer::all();
        return view('frontend.pages.aboutus', compact('aboutus','teams','whatweoffers'));
    }
}
