<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Carousell;

class CarousellController extends Controller
{
    /**
     * Display the carousell images.
     */
    public function index()
    {
        // Fetch up to 5 carousell images from the database
        $images = Carousell::all();

        // Pass the images to the Blade view
        return view('/layouts/app', compact('images'));
    }

    /**
     * Show the form for uploading a new carousell image.
     */
    public function create()
    {
        $images = Carousell::all();
        return view('admin/admin-carousell', compact('images'));
    }

    /**
     * Handle the upload of a new carousell image.
     */
    public function store(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'carousell' => 'required|image|mimes:jpeg,png,jpg|max:10480',
        ]);

        // Store the image in the "carousell" folder within the "public" disk
        $path = $request->file('carousell')->store('carousell', 'public');

        // Save the file path in the database
        Carousell::create(['carousell' => $path]);

        return redirect()->route('carousell.index')->with('success', 'Carousell image uploaded successfully.');
    }

    /**
     * Delete a specific carousell image.
     */
    public function destroy($id)
    {
        // Find the carousell image by its ID
        $image = Carousell::findOrFail($id);

        // Delete the file from storage
        Storage::disk('public')->delete($image->carousell);

        // Delete the record from the database
        $image->delete();

        return redirect()->route('carousell.index')->with('success', 'Carousell image deleted successfully.');
    }
}
