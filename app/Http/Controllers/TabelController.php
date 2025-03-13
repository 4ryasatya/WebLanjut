<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tabel'
        ];

        return view('tabel', $data);
    }
}
