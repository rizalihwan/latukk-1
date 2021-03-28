<?php

namespace App\Http\Controllers;

use App\Siswa;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'siswas' => Siswa::get()
        ]);
    }
}
