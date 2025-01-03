<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Carousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    public function acaramendatang()
    {
        $images = Carousell::select('carousell')->take(5)->get();
        $jadwals = Jadwal::where('category', 'Acara Mendatang')->get();
        return view('layouts/app', compact('jadwals'), compact('images'));
    }

    public function latihan()
    {
        $jadwals = Jadwal::where('category', 'Jadwal Latihan')->get();
        return view('user/latihan', compact('jadwals'));
    }
    public function mendatang()
    {
        $jadwals = Jadwal::where('category', 'Acara Mendatang')->get();
        return view('user/acara-mendatang', compact('jadwals'));
    }
    public function acara()
    {
        $jadwals = Jadwal::where('category', 'Acara Rutin')->get();
        return view('user/acara', compact('jadwals'));
    }
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('admin/admin-jadwal', compact('jadwals'));
    }

    public function create()
    {
        return view('admin/admin-jadwal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'place' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category' => 'required|in:Acara Rutin,Acara Mendatang,Jadwal Latihan',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/jadwal', 'public');
        }

        Jadwal::create($data);

        return redirect()->route('jadwals.index')->with('success', 'Jadwal created successfully.');
    }

    public function edit(Jadwal $jadwal)
    {
        return view('admin/admin-jadwal', compact('jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'place' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category' => 'required|in:Acara Rutin,Acara Mendatang,Jadwal Latihan',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($jadwal->image) {
                Storage::disk('public')->delete($jadwal->image);
            }
            $data['image'] = $request->file('image')->store('images/jadwal', 'public');
        }

        $jadwal->update($data);

        return redirect()->route('jadwals.index')->with('success', 'Jadwal updated successfully.');
    }

    public function destroy(Jadwal $jadwal)
    {
        if ($jadwal->image) {
            Storage::disk('public')->delete($jadwal->image);
        }

        $jadwal->delete();

        return redirect()->route('jadwals.index')->with('success', 'Jadwal deleted successfully.');
    }
}
