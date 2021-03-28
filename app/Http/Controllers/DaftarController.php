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

    public function store()
    {
        $attr = $this->validate(request(),[
            'nis' => 'required|unique:siswas,nis',
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);
        Siswa::create($attr);
        return back();
    }
}
