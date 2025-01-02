<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;


class ImageController extends Controller
{
    /**
     * Display user gallery page.
     */
    public function image()
    {
        $images = Image::all();
        return view('/user/image', compact('images'));
    }

    /**
     * Display admin page for managing images.
     */
    public function admin()
    {
        $images = Image::all();
        return view('/admin/admin-image', compact('images'));
    }

    /**
     * Handle image upload.
     */
    public function upload(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('images', 'public');

        // Save the image details to the database
        $image = new Image();
        $image->name = $validated['name'];
        $image->path = $imagePath;
        $image->save();

        // Redirect back with a success message
        return back()->with('success', 'Image uploaded successfully.');
    }

    /**
     * Handle image deletion.
     */
    public function delete($id)
    {
        // Find the image by ID
        $image = Image::findOrFail($id);

        // Check if the image file exists in storage and delete it
        if (Storage::disk('public')->exists($image->path)) {
            Storage::disk('public')->delete($image->path);
        }

        // Delete the database record
        $image->delete();

        // Redirect back with a success message
        return back()->with('success', 'Image deleted successfully.');
    }
    
}
