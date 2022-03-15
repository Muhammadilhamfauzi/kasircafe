@extends('layout.main')
@section('content')

 <section>
   {{-- <nav class="navbar navbar-expand-lg navbar-light bg-primary text-center ">
      <div class="container ">
        <a class="navbar-brand" href="#"><i class="bi bi-xbox"></i> BatianYuentry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav> --}}

 </section>
 <div>
   <div class="container ">

    <h2>Halaman Transaksi</h2>
    {{-- <a class="mb-2 btn btn-secondary" href="{{ route('kasir.create') }}" role="button">Create</a> --}}
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Menu</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Total</th>
          <th scope="col">Nama Pegawai</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transaksi as $transaksi)
            
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $transaksi->nama_pelanggan}}</td>
          <td>{{ $transaksi->nama_menu}}</td>
          <td>{{ $transaksi->jumlah}}</td>
          <td>{{ $transaksi->total_harga}}</td>
          <td>{{ $transaksi->nama_pegawai}}</td>
        </tr>
       
        @endforeach
      </tbody>
    </table>
   </div>
 </div>

   
        
@endsection