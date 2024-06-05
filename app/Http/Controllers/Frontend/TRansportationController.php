<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Transportation;
use Illuminate\Http\Request;

class TRansportationController extends Controller
{
    public function index()
    {
        $transportations=Transportation::all();
        return view('frontend.pages.transportation', compact('transportations'));

    }
}
