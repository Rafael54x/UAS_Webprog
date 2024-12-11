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
        return view('/admin/admin-image');
    }

    // Handle image upload
public function upload(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Define the default path for the image (fallback if no image is uploaded)
    $defaultPath = 'default/path/to/image.jpg';

    // Check if an image is uploaded
    if ($request->hasFile('image')) {
        // Store the image and get the path
        $imagePath = $request->file('image')->store('images', 'public'); // 'public' is the disk defined in config/filesystems.php
    } else {
        // Use the default path if no image is uploaded
        $imagePath = $defaultPath;
    }

    // Store the image and other data into the database
    $image = new Image(); // Assuming you have an Image model
    $image->name = $validated['name'];
    $image->path = $imagePath; // Save the image path
    $image->save();

    // Redirect or return a response
    return back()->with('success', 'Image uploaded successfully.');}

}
