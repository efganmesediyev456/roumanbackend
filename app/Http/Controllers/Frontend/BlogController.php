<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;


class BlogController extends Controller
{
    public function index(){
    	$blogs=Blog::all();
    	$blogCats=BlogCategory::all();
    	return view('frontend.pages.news', compact('blogs', 'blogCats'));
    }

    public function category($lang,$id){
    	$blogCat=BlogCategory::find($id);
    	$blogs=Blog::whereBlog_category_id($id)->get();
    	$blogCats=BlogCategory::all();

    	return view('frontend.pages.news', compact('blogs', 'blogCats','blogCat'));

    }

    public function inner($lang, $slug){
    	app()->setlocale($lang);
    	$blog=Blog::whereHas("translations", function($e) use ($slug){
    		return $e->whereSlug($slug)->whereLocale(app()->getLocale());
    	})->first();
    	return view('frontend.pages.blog_inside', compact('blog'));
    }
}
