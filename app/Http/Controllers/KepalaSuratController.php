<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use Illuminate\Http\Request;
use App\Models\User;

class KepalaSuratController extends Controller
{
    public function index()
    {
        $kepalaSurats = KepalaSurat::all();
        return view('kepala_surat.index', compact('kepalaSurats'));
    }

    public function create()
    {
        $users = User::all();
        return view('kepala_surat.create', compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_kop' => 'required|string|max:200',
            'alamat_kop' => 'nullable|string',
            'nama_tujuan' => 'nullable|string|max:200',
            'user_id' => 'nullable|exists:users,id',
        ]);

        KepalaSurat::create($request->all());

        return redirect()->route('kepala_surat.index')
            ->with('success', 'Kepala surat baru berhasil ditambahkan.');
    }

    public function show(KepalaSurat $kepalaSurat)
    {
        return view('kepala_surat.show', compact('kepalaSurat'));
    }

    public function edit(KepalaSurat $kepalaSurat)
    {
        return view('kepala_surat.edit', compact('kepalaSurat'));
    }


    public function update(Request $request, KepalaSurat $kepalaSurat)
    {
        $request->validate([
            'nama_kop' => 'required|string|max:200',
            'alamat_kop' => 'nullable|string',
            'nama_tujuan' => 'nullable|string|max:200',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $kepalaSurat->update($request->all());

        return redirect()->route('kepala_surat.index')
            ->with('success', 'Data kepala surat berhasil diperbarui.');
    }

    public function destroy(KepalaSurat $kepalaSurat)
    {
        $kepalaSurat->delete();

        return redirect()->route('kepala_surat.index')
            ->with('success', 'Kepala surat berhasil dihapus.');
    }
}
