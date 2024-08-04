<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\KepalaSurat;
use App\Models\NamaTandatgn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuks = SuratMasuk::with(['kepalaSurat', 'namaTandatgn'])->get();
        return view('surat_masuk.index', compact('suratMasuks'));
    }

    public function create()
    {
        $kepalaSurat = KepalaSurat::all();
        $namaTandatgn = NamaTandatgn::all();
        return view('surat_masuk.create', compact('kepalaSurat', 'namaTandatgn'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kop' => 'required|exists:kepala_surat,id',
            'tanggal' => 'required|date',
            'no_surat' => 'required|string|max:50',
            'asal_surat' => 'required|string|max:150',
            'perihal' => 'required|string|max:150',
            'disp1' => 'required|string|max:70',
            'disp2' => 'required|string|max:70',
            'id_tandatangan' => 'required|exists:nama_tandatgn,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        SuratMasuk::create([
            'id_kop' => $request->id_kop,
            'tanggal' => $request->tanggal,
            'no_surat' => $request->no_surat,
            'asal_surat' => $request->asal_surat,
            'perihal' => $request->perihal,
            'disp1' => $request->disp1,
            'disp2' => $request->disp2,
            'id_tandatangan' => $request->id_tandatangan,
            'image' => $imagePath,
        ]);

        return redirect()->route('surat_masuk.index')
            ->with('success', 'Surat masuk baru berhasil ditambahkan.');
    }

    public function show(SuratMasuk $suratMasuk)
    {
        return view('surat_masuk.show', compact('suratMasuk'));
    }

    public function edit(SuratMasuk $suratMasuk)
    {
        $kepalaSurat = KepalaSurat::all();
        $namaTandatgn = NamaTandatgn::all();
        return view('surat_masuk.edit', compact('suratMasuk', 'kepalaSurat', 'namaTandatgn'));
    }

    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        $request->validate([
            'id_kop' => 'required|exists:kepala_surat,id',
            'tanggal' => 'required|date',
            'no_surat' => 'required|string|max:50',
            'asal_surat' => 'required|string|max:150',
            'perihal' => 'required|string|max:150',
            'disp1' => 'required|string|max:70',
            'disp2' => 'required|string|max:70',
            'id_tandatangan' => 'required|exists:nama_tandatgn,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            Storage::delete('public/' . $suratMasuk->image); // Delete old image
            $suratMasuk->image = $imagePath;
        }

        $suratMasuk->update([
            'id_kop' => $request->id_kop,
            'tanggal' => $request->tanggal,
            'no_surat' => $request->no_surat,
            'asal_surat' => $request->asal_surat,
            'perihal' => $request->perihal,
            'disp1' => $request->disp1,
            'disp2' => $request->disp2,
            'id_tandatangan' => $request->id_tandatangan,
            'image' => $suratMasuk->image,
        ]);

        return redirect()->route('surat_masuk.index')
            ->with('success', 'Data surat masuk berhasil diperbarui.');
    }

    public function destroy(SuratMasuk $suratMasuk)
    {
        Storage::delete('public/' . $suratMasuk->image); // Delete associated image
        $suratMasuk->delete();

        return redirect()->route('surat_masuk.index')
            ->with('success', 'Surat masuk berhasil dihapus.');
    }
}
