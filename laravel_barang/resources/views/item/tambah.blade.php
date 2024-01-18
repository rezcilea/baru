@extends('layout.app')
@section('judul','Form Tambah Data')

@section('konten')

<section class="content">
  <div class="container-fluid">
    <div class="col-12">
      <div class="card p-3">
      <form action="barang/store" method="POST"enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="">Kode Barang</label>
            <input required name="kodebarang" type="number" class="form-control">

      </div>
      <div class="mb-3">
            <label for="">Nama Barang</label>
            <input required name="namabarang" type="text" class="form-control">

      </div>
      <div class="mb-3">
            <label for="">Kategori</label>
            <select name="kategori" id="" class="form-control">
                <option value="">Pilih Kategori</option>
                <option value="Makanan">Makanan</option>
                <option value="NonMakanan">NonMakanan</option>
            </select>

      </div>
      
      
      <div class="mb-3">
            <label for="">Stok</label>
            <input required name="stok" type="number" class="form-control">

      </div>

      </div>
      <div class="mb-3">
            <label for="">Harga</label>
            <input required name="harga" type="number" class="form-control">

      </div>
      <div class="mb-3">
        <a class="btn btn-secondary" href="/barang">Batal</a>
        <button type="submit" class="btn btn-succes">Simpan</button>
        </div>
     
      

    </div>

  </div>
  
</section>
@endsection