<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showHome()
    {
        $mahasiswa = Mahasiswa::all(); // Mengambil semua data mahasiswa dari model Mahasiswa

        return view('home', compact('mahasiswa')); // Mengirimkan data "mahasiswa" ke tampilan home.blade.php
    }


}
