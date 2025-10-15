<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertImage;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locale = session()->get('locale');
        $adverts = Advert::whereHas('translations', function ($query) use ($locale) {
            $query->where('locale', $locale);
        })
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        $comments = Comment::whereHas('translations', function ($query) use ($locale) {
            $query->where('locale', $locale);
        })->where('is_main', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $sliders = Slider::all();
        return view('front.pages.home', compact('adverts', 'comments', 'sliders'));
    }
    public function categories()
    {
        return view('front.pages.categories');
    }
    public function category($category)
    {
        return view('front.pages.category');
    }
    public function detail($id)
    {
        $advert = Advert::find($id);
        $adimage = AdvertImage::where('advert_id', $id)->get();
        return view('front.pages.detail', compact('advert', 'adimage'));
    }
    public function page($id)
    {
        $page = Page::where('id', $id)->first();
        return view('front.pages.page', compact('page'));
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
}
