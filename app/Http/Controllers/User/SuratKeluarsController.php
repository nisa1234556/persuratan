<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratKeluar;

class SuratKeluarsController extends Controller
{
    public function index()
    {
        $suratKeluars = SuratKeluar::paginate(10);
        return view('user.suratkeluars', compact('suratKeluars'));
    }
}
