<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        return view('kegiatan.ekskul',[
            'title' => 'ekskul'
        ]);
    }
}
