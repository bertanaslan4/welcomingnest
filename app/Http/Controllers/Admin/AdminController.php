<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Properties;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('created_at','desc')->take(10)->get();
        $users = User::orderBy('created_at','desc')->take(10)->get();
        $sikayetler = Advert::where('is_complaint',1)->orderBy('created_at','desc')->take(10)->get();
        $userCount = User::count();
        $advertCount = Advert::count();
        $commentCount = Comment::count();
        $sikayetCount = Advert::where('is_complaint',1)->count();
        return view('admin.pages.dashboard',compact('comments','users','userCount','advertCount','commentCount','sikayetCount','sikayetler'));
    }
    public function sliders()
    {
        $sliders = Slider::all();
        return view('admin.pages.sliders',compact('sliders'));
    }
    public function addSlider()
    {
        return view('admin.pages.add_slider');
    }
    public function storeSlider(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $slider = new Slider();
        $en = $request->en;
        $tr = $request->tr;
        $fn = $request->fn;
        if($request->hasFile('image'))
        {
            $path ='images/sliders';
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/sliders');
            $image->move($destinationPath, $name);
            $slider->image = $path.'/'.$name;
        }
        $slider->translateOrNew('en')->description = $en;
        $slider->translateOrNew('tr')->description = $tr;
        $slider->translateOrNew('fn')->description = $fn;
        $slider->save();
        return redirect()->route('admin.sliders')->with('success','Slider başarıyla eklendi');
    }
    public function editSlider($id)
    {
        $slider = Slider::find($id);
        return view('admin.pages.edit_slider',compact('slider'));
    }
    public function updateSlider(Request $request,$id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $slider = Slider::find($id);
        $en = $request->en;
        $tr = $request->tr;
        $fn = $request->fn;
        if($request->hasFile('image'))
        {
            $path ='images/sliders';
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/sliders');
            $image->move($destinationPath, $name);
            $slider->image = $path.'/'.$name;
        }
        $slider->translateOrNew('en')->description = $en;
        $slider->translateOrNew('tr')->description = $tr;
        $slider->translateOrNew('fn')->description = $fn;
        $slider->save();
        return redirect()->route('admin.sliders')->with('success','Slider başarıyla güncellendi');
    }
    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('admin.sliders')->with('success','Slider başarıyla silindi');
    }
    public function props()
    {
        $props = Properties::all();
        return view('admin.pages.props',compact('props'));
    }
    public function addProp()
    {
        return view('admin.pages.add_prop');
    }
    public function storeProp(Request $request)
    {
        $prop = new Properties();
        $tr = $request->tr;
        $en = $request->en;
        $fn = $request->fn;
        $prop->translateOrNew('en')->name = $en;
        $prop->translateOrNew('tr')->name = $tr;
        $prop->translateOrNew('fn')->name = $fn;
        $prop->save();
        return redirect()->route('admin.props')->with('success','Özellik Başarıyla Eklendi');
    }
    public function editProp($id)
    {
        $prop = Properties::find($id);
        return view('admin.pages.edit_prop',compact('prop'));
    }
    public function updateProp(Request $request,$id)
    {
        $prop = Properties::find($id);
        $tr = $request->tr;
        $en = $request->en;
        $fn = $request->fn;
        $prop->translateOrNew('en')->name = $en;
        $prop->translateOrNew('tr')->name = $tr;
        $prop->translateOrNew('fn')->name = $fn;
        $prop->save();
        return redirect()->route('admin.props')->with('success','Özellik Başarıyla Düzenlendi');
    }
    public function deleteProp($id)
    {
        $prop = Properties::find($id);
        if (!$prop) {
            return redirect()->route('admin.props')->with('error', 'Property not found');
        }

        $adverts = Advert::whereJsonContains('properties', (string) $id)->get();

        foreach ($adverts as $advert) {
            $properties = json_decode($advert->properties, true);
            if (($key = array_search($id, $properties)) !== false) {
                unset($properties[$key]);
            }
            $advert->properties = json_encode(array_values($properties));
            $advert->save();
        }
        $prop->delete();
        return redirect()->route('admin.props')->with('success', 'Özellik Başarıyla Silindi');
    }
    public function pages()
    {
        $pages = Page::all();
        return view('admin.pages.pages',compact('pages'));
    }
    public function addPage()
    {
        return view('admin.pages.add_page');
    }
    public function storePage(Request $request)
    {
        $page = new Page();
        $tr_title = $request->tr_title;
        $en_title = $request->en_title;
        $fn_title = $request->fn_title;
        $tr_content = $request->tr_content;
        $en_content = $request->en_content;
        $fn_content = $request->fn_content;
        $page->translateOrNew('en')->title = $en_title;
        $page->translateOrNew('tr')->title = $tr_title;
        $page->translateOrNew('fn')->title = $fn_title;
        $page->translateOrNew('en')->content = $en_content;
        $page->translateOrNew('tr')->content = $tr_content;
        $page->translateOrNew('fn')->content = $fn_content;
        $page->save();
        return redirect()->route('admin.pages')->with('success','Sayfa Başarıyla Eklendi');
    }
    public function editPage($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit_page',compact('page'));
    }
    public function updatePage(Request $request,$id)
    {
        $page = Page::find($id);
        $tr_title = $request->tr_title;
        $en_title = $request->en_title;
        $fn_title = $request->fn_title;
        $tr_content = $request->tr_content;
        $en_content = $request->en_content;
        $fn_content = $request->fn_content;
        $page->translateOrNew('en')->title = $en_title;
        $page->translateOrNew('tr')->title = $tr_title;
        $page->translateOrNew('fn')->title = $fn_title;
        $page->translateOrNew('en')->content = $en_content;
        $page->translateOrNew('tr')->content = $tr_content;
        $page->translateOrNew('fn')->content = $fn_content;
        $page->save();
        return redirect()->route('admin.pages')->with('success','Sayfa Başarıyla Güncellendi');
    }
    public function deletePage($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect()->route('admin.pages')->with('success','Sayfa Başarıyla Silindi');
    }
    public function login()
    {
        return view('admin.pages.login');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $correctUsername = 'Welcomingnest';
        $correctPassword = 'Veraxanax8292*-*';

        if ($credentials['username'] === $correctUsername && $credentials['password'] === $correctPassword) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('error', 'Geçersiz kullanıcı adı veya şifre.');
        }
    }
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
    public function mainComment($id)
    {
        $comment = Comment::find($id);
        $comment->is_main = 1;
        $comment->save();
        return redirect()->back()->with('success','Yorum başarıyla ana yorum yapıldı');
    }
    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('success','Yorum başarıyla silindi');
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Kullanıcı başarıyla silindi');
    }
    public function deleteAdvert($id)
    {
        $advert = Advert::find($id);
        $advert->delete();
        return redirect()->back()->with('success','İlan başarıyla silindi');
    }

}
