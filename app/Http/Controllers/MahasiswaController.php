<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function datamahasiswa()
    {
        return view('mahasiswa.datamahasiswa');
    }
    
}
