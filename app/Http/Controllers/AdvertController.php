<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\AdvertImage;
use App\Models\Cities;
use App\Models\Comment;
use App\Models\Countries;
use App\Models\Properties;
use App\Models\States;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function adCreate()
    {
        $props = Properties::all();
        return view('front.pages.add_post', compact('props'));
    }
    public function adPost(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'properties' => 'nullable|array',
            'properties.*' => 'exists:properties,id',
            'price' => 'required|numeric',
        ]);

        $advert = new Advert();
        $advert->translateOrNew(session()->get('locale'))->title = $data['title'];
        $advert->translateOrNew(session()->get('locale'))->description = $data['description'];
        $advert->translateOrNew(session()->get('locale'))->price = $data['price'];
        $advert->city_id = $request->city;

        $advert->properties = isset($data['properties']) ? json_encode($data['properties']) : json_encode([]);

        $advert->user_id = auth()->id();

        if ($request->hasFile('thumbnail')) {
            $directory = 'asset/adverts';
            $filename = time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->move(public_path($directory), $filename);
            $advert->thumbnail = $directory . '/' . $filename;
        }

        $advert->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $directory = 'asset/adverts';
                $image->move(public_path($directory), $filename);

                $advertImage = new AdvertImage();
                $advertImage->advert_id = $advert->id;
                $advertImage->path = $directory . '/' . $filename;
                $advertImage->save();
            }
        }

        return redirect()->route('home')->with('success', 'İlanınız başarıyla oluşturuldu');
    }

    public function uploadImages(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            return response()->json(['success' => $imageName]);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }
    public function adComment(Request $request, $id)
    {
        $advert = Advert::findOrFail($id);
        $comment = new Comment();
        $comment->advert_id = $advert->id;
        $comment->stars = $request->rating;
        $comment->user_id = auth()->id();
        $comment->translateOrNew(session()->get('locale'))->content = $request->comment;
        $comment->save();
        return back();
    }
    public function adEdit($id)
    {
        $advert = Advert::findOrFail($id);
        $props = Properties::all();
        $countries = Countries::all();
        return view('front.pages.update_post', compact('advert', 'props','countries'));
    }
    public function adUpdate(Request $request,$id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'properties' => 'nullable|array',
            'properties.*' => 'exists:properties,id',
        ]);
        $advert = Advert::findOrFail($id);
        $advert->translateOrNew(session()->get('locale'))->title = $data['title'];
        $advert->translateOrNew(session()->get('locale'))->description = $data['description'];
        $advert->translateOrNew(session()->get('locale'))->price = $request->price;
        $advert->city_id = $request->city;
        $advert->properties = json_encode($data['properties']);
        $advert->user_id = auth()->id();
        if ($request->hasFile('thumbnail')) {
            $directory = 'asset/adverts';
            $filename = time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->move(public_path($directory), $filename);
            $advert->thumbnail = $directory . '/' . $filename;
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $directory = 'asset/adverts';
                $image->move(public_path($directory), $filename);

                $advertImage = new AdvertImage();
                $advertImage->advert_id = $advert->id;
                $advertImage->path = $directory . '/' . $filename;
                $advertImage->save();
            }
        }
        $advert->save();
        return redirect()->route('home')->with('success', 'İlanınız başarıyla güncellendi');
    }
    public function adDelete($id)
    {
        $advert = Advert::findOrFail($id);
        $advert->delete();
        return redirect()->route('home');
    }
    public function complaint($id)
    {
        $advert = Advert::findOrFail($id);
        $advert->is_complaint = 1;
        $advert->save();
        return redirect()->back()->with('success', 'İlan şikayet edildi');
    }
    public function siteComment(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->translateOrNew(session()->get('locale'))->content = $request->comment;
        $comment->save();
        return redirect()->back()->with('success', 'Yorumunuz başarıyla eklendi');
    }
    public function deleteImage(Advert $advert, AdvertImage $image)
    {
        if ($image->advert_id !== $advert->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        if (file_exists(public_path($image->path))) {
            unlink(public_path($image->path));
        }

        $image->delete();

        return response()->json(['success' => 'Image deleted successfully']);
    }
}
