<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class FileController extends Controller
{
    // Create
    public function store_file(Request $request)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $file = $request->file('pdf');
        $file_path = $file->store('moduls');

        $modul = new Modul();
        $modul->nama_modul = $request->nama_modul;
        $modul->deskripsi = $request->deskripsi;
        $modul->file_path = $file_path;
        $modul->file_name = $file->getClientOriginalName();
        $modul->file_size = $file->getSize();
        $modul->file_type = $file->getClientMimeType();
        $modul->user_id = auth()->id();
        $modul->save();

        return redirect()->route('list')->with('success', 'Modul berhasil ditambahkan.');
    }

    // Read
    public function show_file()
    {
        $moduls = Modul::latest()->get();
        // dd($moduls);
        return view('moduls.list', compact('moduls'));
    }

    // Update
    public function update_file(Request $request, Modul $modul)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'pdf' => 'mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $file_path = $file->store('moduls');

            $modul->file_path = $file_path;
            $modul->file_name = $file->getClientOriginalName();
            $modul->file_size = $file->getSize();
            $modul->file_type = $file->getClientMimeType();
        }

        $modul->nama_modul = $request->nama_modul;
        $modul->deskripsi = $request->deskripsi;
        $modul->save();

        return redirect()->route('list')->with('success', 'Modul berhasil diperbarui.');
    }

    // Delete
    public function delete_file(Modul $modul)
    {
        $modul->delete();
        return redirect()->route('list');
    }

    public function download(Modul $modul)
    {
        return response()->download(storage_path('app/' . $modul->file_path), $modul->file_name);
    }

    public function edit(Modul $modul)
    {
        $moduls = Modul::latest()->get();
        return view('moduls.edit', compact('modul'));
    }
}
