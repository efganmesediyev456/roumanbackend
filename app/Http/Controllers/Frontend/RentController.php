<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use App\Models\RentCategory;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        $rents=Rent::all();
        $rentcategories=RentCategory::all();
        return view('frontend.pages.rent', compact('rents','rentcategories'));
    }

    public function category($language, $id)
    {
        $rentcategory=RentCategory::find($id);

        $rents=$rentcategory->rents;
        $rentcategories=RentCategory::all();


        return view('frontend.pages.rent', compact('rents','rentcategories'));

    }
}