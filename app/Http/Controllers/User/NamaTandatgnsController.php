<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NamaTandatgn;
use Illuminate\Http\Request;

class NamaTandatgnsController extends Controller
{
    public function index()
    {
        $namaTandatgns = NamaTandatgn::paginate(10);
        return view('user.namaTandatgns', compact('namaTandatgns'));
    }
}
