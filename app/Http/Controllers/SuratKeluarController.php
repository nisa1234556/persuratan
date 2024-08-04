<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\NamaTandatgn;
use App\Models\User;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{

    public function index()
    {
        $suratKeluars = SuratKeluar::all();
        return view('surat_keluar.index', compact('suratKeluars'));
    }

    public function create()
    {
        $namaTandatgn = NamaTandatgn::all();
        $users = User::all();
        return view('surat_keluar.create', compact('namaTandatgn', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'no_surat' => 'required|string|max:200',
            'perihal' => 'required|string|max:150',
            'tujuan' => 'required|string|max:50',
            'isi_surat' => 'required',
            'id_tandatangan' => 'nullable|exists:nama_tandatgn,id',
            'user_id' => 'nullable|exists:users,id',
        ]);

        SuratKeluar::create($request->all());

        return redirect()->route('surat_keluar.index')
            ->with('success', 'Surat keluar created successfully.');
    }

    public function show(SuratKeluar $suratKeluar)
    {
        return view('surat_keluar.show', compact('suratKeluar'));
    }

    public function edit(SuratKeluar $suratKeluar)
    {
        $namaTandatgn = NamaTandatgn::all();
        $users = User::all();
        return view('surat_keluar.edit', compact('suratKeluar', 'namaTandatgn', 'users'));
    }

    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'no_surat' => 'required|string|max:200',
            'perihal' => 'required|string|max:150',
            'tujuan' => 'required|string|max:50',
            'isi_surat' => 'required',
            'id_tandatangan' => 'nullable|exists:nama_tandatgn,id',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $suratKeluar->update($request->all());

        return redirect()->route('surat_keluar.index')
            ->with('success', 'Surat keluar updated successfully.');
    }

    public function destroy(SuratKeluar $suratKeluar)
    {
        $suratKeluar->delete();

        return redirect()->route('surat_keluar.index')
            ->with('success', 'Surat keluar deleted successfully.');
    }
}
