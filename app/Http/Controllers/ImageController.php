<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    // Display user page
    public function image()
    {
        $images = Image::all();
        return view('/user/image', compact('images'));
    }

    // Display admin page
    public function admin()
    {
        return view('admin-image');
    }

    // Handle image upload
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $path = $request->image->storeAs('images', $imageName, 'public');

        Image::create([
            'name' => $imageName,
            'path' => $path,
            'category' => $request->category ?? 'Uncategorized',
        ]);

        return back()->with('success', 'Image uploaded successfully.');
    }
}
