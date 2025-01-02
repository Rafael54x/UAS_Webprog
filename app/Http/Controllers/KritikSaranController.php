<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KritikSaranExport;

class KritikSaranController extends Controller
{
    // Show the form
    public function index()
    {
        return view('user/kritik-saran');
    }

    public function kritiksaran()
    {
        return view('admin/admin-kritiksaran');
    }

    // Store Kritik and Saran
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kritik' => 'required|string|max:1000',
            'saran'  => 'required|string|max:1000',
        ]);

        KritikSaran::create($validated);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    public function view()
    {
        $data = KritikSaran::all();
        return view('admin/admin-kritiksaran', compact('data'));
    }

    public function clear()
    {
        KritikSaran::truncate();
        return redirect()->route('kritik-saran.view')->with('success', 'All data cleared successfully!');
    }
    // Export Kritik and Saran to Excel
    public function exportToExcel()
    {
        return Excel::download(new KritikSaranExport, 'kritik_saran.xlsx');
    }
}
