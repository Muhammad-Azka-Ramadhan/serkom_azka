<?php

namespace App\Http\Controllers;

use App\Models\profil_sekolah;
use Illuminate\Http\Request;

class ProfilsekolahController extends Controller
{
    //
    public function index(){
        $data = [
            'title' => 'Profil'
        ];
        $profilSekolah = profil_sekolah::all();
        return view("admin.profil.index", [
            'data' => $data,
            'profilSekolah' => $profilSekolah
        ]); 
    }

    public function edit($id){
        $data = profil_sekolah::findOrFail($id);

        return view('admin.profil.edit', compact('profil_sekolah'));
    }
}
