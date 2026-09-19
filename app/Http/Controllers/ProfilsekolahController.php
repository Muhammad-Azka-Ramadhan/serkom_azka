<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilsekolahController extends Controller
{
    //
    public function index(){
        $data = [
            'title' => 'Profil'
        ];
        return view("admin.profilesekolah", $data); 
    }
}
