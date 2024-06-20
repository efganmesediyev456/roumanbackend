<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Car;

use App\Models\TourApply;
use Illuminate\Http\Request;

class TourController extends Controller
{

    public function apply($lang, $id, Request $request){
        app()->setlocale($lang);
        $this->validate($request,[
                "name"=>"required",
                "email"=>"required|email",
                "adults"=>"required",
                "kids"=>"required",
                "phone"=>"required",
                "permission"=>"required|boolean|in:1"

        ]);
        $tour=Tour::find($id);

        $car_id=Car::find($request->car);
        TourApply::create([
                "tour_id"=>$id,
                "car_id"=>$request->car,
                "name"=>$request->name,
                "email"=>$request->email,
                "adults"=>$request->adults,
                "kids"=>$request->kids,
                "phone"=>$request->phone,
                "guide"=>$request->guide,
                "guide_language"=>$request->guide ? $request->guide_language : null,
                "activities"=>$request->activities
        ]);


    }
    public function index()
    {
        $cars=Car::all();
        $tours=Tour::all();
        return view('frontend.pages.tours', compact('tours', 'cars'));
    }

    public function inner($lang,$slug){
    	$tour=Tour::whereSlug($slug)->first();
        $cars=Car::all();
    	$tours=Tour::all();
    	return view('frontend.pages.tour_inside', compact('tour','tours','cars'));
    }
}
