<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabang;

class CabangController extends Controller
{
    public function index()
    {
        $data['cabang'] = Cabang::with('Cabangshelf')->get();
        return view('cabang.index', $data);
    }
}

