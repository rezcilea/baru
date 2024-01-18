@extends('layout.app')
@section('judul','Form Edit Data')

@section('konten')

<section class="content">
  <div class="container-fluid">
    <div class="col-12">
      <div class="card p-3">
      <form action="barang/update/{{$item->id}}" method="POST"enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="">Kode Barang</label>
            <input value="{{ $item->kodebarang}}" temrequired name="kodebarang" type="number" class="form-control">

      </div>
      <div class="mb-3">
            <label for="">Nama Barang</label>
            <input value="{{ $item->namabarang}}" required name="namabarang" type="text" class="form-control">

      </div>
      <div class="mb-3">
            <label for="">Kategori</label>
            <select name="kategori" id="" class="form-control">
                <option value="">Pilih Kategori</option>
                <option value="Makanan" {{($item->kategori === 'Makanan' )?'selected': ''}}>Makanan</option>
                <option value="NonMakanan"  {{($item->kategori === 'NonMakanan' )?'selected': ''}}>NonMakanan</option>
            </select>

      </div>
      
      
      <div class="mb-3">
            <label for="">Stok</label>
            <input value="{{ $item->stok}}" required name="stok" type="number" class="form-control">

      </div>

      </div>
      <div class="mb-3">
            <label for="">Harga</label>
            <input value="{{ $item->harga}}" required name="harga" type="number" class="form-control">

      </div>
      <div class="mb-3">
        <a class="btn btn-secondary" href="/barang">Batal</a>
        <button type="submit" class="btn btn-succes">Edit</button>
        </div>
     
      

    </div>

  </div>
  
</section>
@endsection