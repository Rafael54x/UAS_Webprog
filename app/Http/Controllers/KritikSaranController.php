<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;
use App\Models\Saran;

class KritikSaranController extends Controller
{
    public function store_kritik(Request $request)
    {
        $validated = $request->validate([
            'kritik' => 'required|min:10|max:1000'
        ]);

        Kritik::create([
            'content' => $validated['kritik'],
            'user_id' => auth()->id() // If you're tracking users
        ]);

        return back()->with('success', 'Kritik berhasil dikirim!');
    }

    public function store_saran(Request $request)
    {
        $validated = $request->validate([
            'saran' => 'required|min:10|max:1000'
        ]);

        Saran::create([
            'content' => $validated['saran'],
            'user_id' => auth()->id() // If you're tracking users
        ]);

        return back()->with('success', 'Saran berhasil dikirim!');
    }
}