<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $pesanan = Pesanan::all();
        return view('admin.pesanan.index', ['pesanan' => $pesanan]);
    }

    // Tambahkan fungsi lain sesuai kebutuhan seperti create, edit, delete, dll.
}
