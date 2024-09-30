<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all(); // Mengambil seluruh data dari tabel
        return view('index', compact('data')); // Mengirim data ke view 
    }
        public function create()
    {
        return view('create'); // Menampilkan form untuk tabel dosen
    }
    // app/Http/Controllers/ExampleController.php

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
            'birthdate' => 'required|date',
            'is_active' => 'boolean',
        ]);

        // Menyimpan data ke dalam database
        Dosen::create($validated);

        // Redirect ke halaman index
        return redirect()->route('example.index')->with('success', 'Data created successfully!');
    }

}

// app/Http/Controllers/DosenController.php


