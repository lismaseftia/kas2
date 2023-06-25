<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // Lakukan logika untuk mengambil data yang dibutuhkan untuk dasborad
    $mahasiswa = MahasiswaController::count();
    $mahasiswa = HomeController::count();
    $mahasiswa = Mahasiswa::count();

    // Kirim data ke tampilan dasborad
    return view('dashboard', compact('userCount', 'orderCount', 'productCount'));
}

}
