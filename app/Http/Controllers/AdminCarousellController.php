<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Carousell;

class AdminCarousellController extends Controller
{
    /**
     * Display the admin carousell management page.
     */
    public function index()
    {
        // Fetch all carousel images
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
            'carousell' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store the image in the "carousell" folder within the "public" disk
        $path = $request->file('carousell')->store('carousell', 'public');

        // Save the file path in the database
        Carousell::create(['carousell' => $path]);

        return redirect()->route('admin/admin-carousell')->with('success', 'Carousell image added successfully.');
    }

    /**
     * Delete a specific carousell image.
     */
    public function destroy($id)
    {
        // Find the carousell image by ID
        $image = Carousell::findOrFail($id);

        // Delete the file from storage
        Storage::disk('public')->delete($image->carousell);

        // Delete the record from the database
        $image->delete();

        return redirect()->route('admin/admin-carousell')->with('success', 'Carousell image deleted successfully.');
    }
}
