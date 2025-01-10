<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
       return view('home'); 
    }

    public function motivasi(){
        return view('motivasi.motivasi');
    }
    public function alat(){
        return view('alat.index');
    }
    public function pengguna(){
        return view('pengguna.pengguna');
    }
    public function kegiatan(){
        $todos = Todo::all(); // Ambil semua todos dari database
        return view('kegiatan.kegiatan', compact('todos')); // Kirim todos ke tampilan
    }
}
