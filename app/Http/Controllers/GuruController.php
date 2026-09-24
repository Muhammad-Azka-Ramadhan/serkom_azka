<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index(){
        $data = [
            'title' => 'Guru'
        ];
        return view("admin.guru.index", $data);
    }
}
