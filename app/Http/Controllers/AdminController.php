<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('images', 'public'); // Store in 'public/images' directory
            return back()->with('success', 'Image uploaded successfully')->with('image', $imagePath);
        }

        return back()->withErrors(['image' => 'Please upload a valid image.']);
    }
}
