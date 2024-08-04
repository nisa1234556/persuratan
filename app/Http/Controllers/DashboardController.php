<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaTandatgn;
use App\Models\KepalaSurat;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;

class DashboardController extends Controller
{
    public function index()
    {
        $namaTandaTanganCount = NamaTandatgn::count();
        $kepalaSuratCount = KepalaSurat::count();
        $suratKeluarCount = SuratKeluar::count();
        $suratMasukCount = SuratMasuk::count();

        return view('dashboard', compact('namaTandaTanganCount', 'kepalaSuratCount', 'suratKeluarCount', 'suratMasukCount'));
    }
}
