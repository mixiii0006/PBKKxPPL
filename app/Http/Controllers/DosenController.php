<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::with('mataKuliahs')->get();

        return view('index', compact('data'));
        // Mengirim data ke view
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
        return redirect()->route('index')->with('success', 'Data created successfully!');
    }
    public function edit(Dosen $dosen)
    {
        return view('edit', ['dosen' => $dosen]);
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|in:male,female',
            'birthdate' => 'required|date',
            'is_active' => 'boolean',
        ]);
        $dosen = Dosen::find($id);
        $dosen->update($request->all());
        return redirect('/index')->with('success', 'Buku Berhasil Diupdate');
    }
    public function destroy(Dosen $dosen){

        $dosen->delete();

        return redirect('/index')->with('success', 'Buku Berhasil Dihapus');
    }

    public function show($id)
    {

        $dosen = Dosen::with('mataKuliahs')->find($id);

        if (!$dosen) {
            return response()->json(['message' => 'Dosen tidak ditemukan'], 404);
        }

        return response()->json($dosen);

}

// app/Http/Controllers/DosenController.php
}
