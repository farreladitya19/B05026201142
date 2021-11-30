<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$home = DB::table('home')->get();

    	// mengirim data pegawai ke view index
    	return view('home.index',['home' => $home]);

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tambah');

    }
}
