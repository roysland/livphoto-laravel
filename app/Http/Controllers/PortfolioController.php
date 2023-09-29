<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $images = Portfolio::orderBy('gallery_order', 'asc')->get();
        $cat = request()->get('category');
        // Get category from get request

        $session = session()->get('admin');

        $categories = [];
        $showImages = Portfolio::where('category', $cat)->orderBy('gallery_order', 'asc')->get();
        foreach($images as $image) {
            $categories[] = $image->category;
        }
        $categories = array_unique($categories);
        return view('portfolio', ['images' => $showImages, 'categories' => $categories, 'cat' => $cat, 'session' => $session]);
    }

    public function moveUp($id)
    {
        $image = Portfolio::find($id);
        $image->gallery_order = $image->gallery_order - 1;
        $image->save();
        $newGallery = Portfolio::where('category', $image->category)->orderBy('gallery_order', 'asc')->get();
        return view('partials.gallery', ['images' => $newGallery]);
    }

    public function moveDown($id)
    {
        $image = Portfolio::find($id);
        $image->gallery_order = $image->gallery_order + 1;
        $image->save();

        $newGallery = Portfolio::where('category', $image->category)->orderBy('gallery_order', 'asc')->get();
        return view('partials.gallery', ['images' => $newGallery]);
    }

    public function delete($id)
    {
        $image = Portfolio::find($id);
        $image->delete();
        $newGallery = Portfolio::where('category', $image->category)->orderBy('gallery_order', 'asc')->get();
        return view('partials.gallery', ['images' => $newGallery]);
    }

    public function uploadFile(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $path = Storage::disk('s3')->put('images', $request->image);
        $path = Storage::disk('s3')->url($path);

        // Change to cloudfront url
        $path = str_replace('https://s3.eu-north-1.amazonaws.com/livjansen.no', 'https://d2wbuz9ehbt6lo.cloudfront.net', $path);

        $image = new Portfolio();
        $image->category = $request->category;
        $image->url = $path;
        $image->gallery_order = 0;
        $image->save();

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

}
