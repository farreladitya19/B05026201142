<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SnackController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('snack')->get();
        $snack = DB::table('snack')->paginate(2);

    	// mengirim data snack ke view index
    	return view('snack.index',['snack' => $snack]);

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table snack sesuai pencarian data
		$snack = DB::table('snack')
		->where('merksnack','like',"%".$cari."%")
		->paginate();

    		// mengirim data snack ke view index
		return view('snack.index',['snack' => $snack]);

	}
    // method untuk menampilkan view form tambah snack
    public function tambah()
    {

	// memanggil view tambah
	return view('snack.tambah');

    }
    // method untuk insert data ke table snack
    public function store(Request $request)
    {
	// insert data ke table snack
	DB::table('snack')->insert([
		'merksnack' => $request->merksnack,
		'stocksnack' => $request->stocksnack,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');

    }
    // method untuk edit data snack
    public function edit($id)
    {
	// mengambil data snack berdasarkan id yang dipilih
	$snack = DB::table('snack')->where('kodesnack',$id)->get();
	// passing data snack yang didapat ke view edit.blade.php
	return view('snack.edit',['snack' => $snack]);

    }
    // update data snack
    public function update(Request $request)
    {
	// update data snack
	DB::table('snack')->where('kodesnack',$request->id)->update([
		'merksnack' => $request->merksnack,
		'stocksnack' => $request->stocksnack,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');
    }
    // method untuk hapus data snack
    public function hapus($id)
    {
	// menghapus data snack berdasarkan id yang dipilih
	DB::table('snack')->where('kodesnack',$id)->delete();

	// alihkan halaman ke halaman snack
	return redirect('/snack');
    }
    public function view($id)
    {
    // mengambil data snack berdasarkan id yang dipilih
    $snack = DB::table('snack')->where('kodesnack',$id)->get();
    // passing data snack yang didapat ke view edit.blade.php
    return view('snack.detail',['snack' => $snack]);

    }
}


