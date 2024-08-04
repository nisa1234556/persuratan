<?php

namespace App\Http\Controllers;

use App\Models\NamaTandatgn;
use Illuminate\Http\Request;

class NamaTandatgnController extends Controller
{
    /**
     * Tampilkan daftar semua nama tandatangan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $namaTandatgns = NamaTandatgn::all();
        return view('nama_tandatgn.index', compact('namaTandatgns'));
    }

    /**
     * Tampilkan formulir untuk membuat nama tandatangan baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nama_tandatgn.create');
    }

    /**
     * Simpan nama tandatangan baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tandatangan' => 'required|string|max:100',
            'jabatan' => 'required|string|max:200',
            'nip' => 'required|string|max:25|unique:nama_tandatgn,nip',
        ]);

        NamaTandatgn::create($request->all());

        return redirect()->route('nama_tandatgn.index')
            ->with('success', 'Nama tandatangan baru berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail nama tandatangan.
     *
     * @param  \App\Models\NamaTandatgn  $namaTandatgn
     * @return \Illuminate\Http\Response
     */
    public function show(NamaTandatgn $namaTandatgn)
    {
        return view('nama_tandatgn.show', compact('namaTandatgn'));
    }

    /**
     * Tampilkan formulir untuk mengedit nama tandatangan.
     *
     * @param  \App\Models\NamaTandatgn  $namaTandatgn
     * @return \Illuminate\Http\Response
     */
    public function edit(NamaTandatgn $namaTandatgn)
    {
        return view('nama_tandatgn.edit', compact('namaTandatgn'));
    }

    /**
     * Update nama tandatangan yang ditentukan di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NamaTandatgn  $namaTandatgn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NamaTandatgn $namaTandatgn)
    {
        $request->validate([
            'nama_tandatangan' => 'required|string|max:100',
            'jabatan' => 'required|string|max:200',
            'nip' => 'required|string|max:25|unique:nama_tandatgn,nip,' . $namaTandatgn->id,
        ]);

        $namaTandatgn->update($request->all());

        return redirect()->route('nama_tandatgn.index')
            ->with('success', 'Data nama tandatangan berhasil diperbarui.');
    }

    /**
     * Hapus nama tandatangan dari database.
     *
     * @param  \App\Models\NamaTandatgn  $namaTandatgn
     * @return \Illuminate\Http\Response
     */
    public function destroy(NamaTandatgn $namaTandatgn)
    {
        $namaTandatgn->delete();

        return redirect()->route('nama_tandatgn.index')
            ->with('success', 'Nama tandatangan berhasil dihapus.');
    }
}
