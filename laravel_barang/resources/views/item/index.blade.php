@extends('layout.app')
@section('judul','Data Barang')

@section('konten')

<section class="content">
  <div class="container-fluid">
    <div class="col-12">
      <div class="card p-3">
        @if(session('sukuses'))
        <div class="alert alert-success alert-disnissible fade show" role="alert">
          <strong>Selamat</strong> {{ sessionn('sukses') }}.
          <Button type="button" class="close" data-disniss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </Button>
        </div>
        @endif

        <div>
        <a href="/barang/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <form action="" method="get">
          <div class="nt-2">
            <div class="col-12 col-sm-6">
              <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="cari data barang">
                <button class="btn btn-primary" >Search</button>&nbsp;
                <button class="btn btn-danger" >Clear</button>&nbsp;
            
              </div>
            </div>
          </div>
        </form>
        <table class="table teble-striped">
          <thead>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($item as $i)

            <tr>
              <td>{{ $i->id }}</td>
              <td>{{ $i->kodebarang }}</td>
              <td>{{ $i->namabarang }}</td>
              <td>{{ $i->kategori }}</td>
              <td>{{ $i->stok }}</td>
              <td>{{ $i->harga }}</td>

              <td>
                <a href="/barang/{{ $i->id }}/edit" class="btn btn-warning">Edit</a>
                <a href="/barang/edit/{{ $i->id }}" class="btn btn-danger">Hapus</a>
              </td>
            
            </tr>
            @endforeach
          </tbody>

        </table>

      </div>
    </div>

  </div>
  
</section>
@endsection