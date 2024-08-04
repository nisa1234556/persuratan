<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;

class SuratMasuksController extends Controller
{
    public function index()
    {
        $suratMasuks = SuratMasuk::paginate(10);
        return view('user.suratmasuks', compact('suratMasuks'));
    }
}
