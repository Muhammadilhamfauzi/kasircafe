@extends('layout.main')
@section('content')


   <div class="container">
       <h2>Halaman Create Menu</h2>
       @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
       <form action="{{ route('manajer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-8">
              <input type="text" name="nama_menu" class="form-control" id="" placeholder="" autofocus required>
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
              <input type="text" name="harga" class="form-control" id="" placeholder="" required>
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Ketersediaan</label>
            <div class="col-sm-8">
              <input type="number" name="ketersediaan" class="form-control" id="" placeholder="" required>
            </div>
            
          </div>
          <div class="">
            <button type="submit" class="btn btn-secondary">Simpan</button>
            {{-- <a class="btn btn-secondary" type="submit" role="button">Simpan</a> --}}
            <a class="btn btn-secondary" href="{{ route('manajer.index') }}" role="button">Kembali</a>
          </div>
       </form>
   </div>
        
@endsection