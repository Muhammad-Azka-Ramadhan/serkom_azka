<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    //
    public function index(){
        $data = [
            'title' => 'Siswa'
        ];

        $siswa = siswa::orderBy('nama_siswa', 'asc')->paginate(10);
        return view("admin.siswa.index", [
            'data' => $data,
            'siswa' => $siswa
        ]);
    }
}
