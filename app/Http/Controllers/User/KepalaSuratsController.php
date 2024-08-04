<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KepalaSurat;

class KepalaSuratsController extends Controller
{
    public function index()
    {
        $kepalaSurats = KepalaSurat::paginate(10);
        return view('user.kepalasurats', compact('kepalaSurats'));
    }
}
