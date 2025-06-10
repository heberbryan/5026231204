<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasCRUD extends Controller
{
    public function index()
    {
    	// mengambil data dari table meja
        // $meja = DB::table('meja')->get();
        // pagination
        $meja = DB::table('meja')->paginate(10);

    	// mengirim data meja ke view index2
        return view('index2',['meja' => $meja]);


    }

    public function tambah()
    {
    	// memanggil view tambah
        return view('tambah2');
    }

    public function store(Request $request)
    {
	    // insert data ke table meja
        DB::table('meja')->insert([
            'merkmeja' => $request->merkmeja,
            'hargameja' => $request->hargameja,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
	]);
	// alihkan halaman ke halaman meja
	return redirect('/meja');

    }


    // method untuk edit data meja
    public function edit($id)
    {
	// mengambil data meja berdasarkan id yang dipilih
	$meja = DB::table('meja')
                ->where('ID',$id)
                ->get();
	// passing data meja yang didapat ke view edit2.blade.php
	return view('edit2',['meja' => $meja]);
    }


    // update data meja
    public function update(Request $request)
    {
	    // update data meja
        DB::table('meja')->where('ID',$request->id)->update([
            'merkmeja' => $request->merk,
            'hargameja' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
	    // alihkan halaman ke halaman meja
        return redirect('/meja');
    }

    // method untuk hapus data meja
    public function hapus($id)
    {
	    // menghapus data meja berdasarkan id yang dipilih
        DB::table('meja')->where('ID',$id)->delete();

	    // alihkan halaman ke halaman meja
        return redirect('/meja');
    }

    // method untuk mencari data meja
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table meja sesuai pencarian data
		$meja = DB::table('meja')
		->where('merkmeja','like',"%".$cari."%")
		->paginate();

    		// mengirim data meja ke view index2
		return view('index2',['meja' => $meja]);

	}
}