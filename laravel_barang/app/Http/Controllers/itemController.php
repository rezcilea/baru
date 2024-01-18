<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = item::all();
            return view('item.index', ['item' => $item]);
        
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$item = item::table('barang')
		->where('namabarang','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['item' => $item]);
 
	}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.tambah');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $postdata = ([
            'kodebarang' => $request->kodebarang,
            'namabarang' =>$request->namabarang,
            'kategori' =>$request->kategori,
            'stok' =>$request->stok,
            'harga' =>$request->harga]);

            item::create($postdata);
            return redirect('/barang')->with('sukses','Data Berhasil Ditambahkan');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(item $item)
    {
      
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(item $item)
    {
          return view('item.update', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $item = item::where('id', $id)->first();
        $postdata =(['kodebarang' => $request->kodebarang,
        'namabarang' => $request->namabarang,
        'kategori' => $request->kategori,
        'stok' => $request->stok,
        'harga' => $request->harga,]);
        $item->update($postdata);
        return redirect('/barang')->with('Succes', 'Data Berhasil Diedit');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(item $item)
    {
        //
    }
}