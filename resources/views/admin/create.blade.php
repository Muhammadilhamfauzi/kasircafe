@extends('layout.main')
@section('content')


   <div class="container">
       <h2>Halaman Create User</h2>
       @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
       <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="mb-3 row">
              
            <label for="name" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-8">
              <input type="text" name="nama" class="form-control" id="names" placeholder="" autofocus required>
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-8">
              <input type="text" name="username" class="form-control" id="" placeholder="" required>
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" id="" placeholder="" required>
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label" >Role</label>
            <div class="col-sm-8">
              <select name="role" class="form-control" id="">
                <option value="admin">Admin</option>
                <option value="manajer">Manajer</option>
                <option value="kasir">Kasir</option>
              </select>
              {{-- <input type="text" name="role" class="form-control" id="" placeholder=""> --}}
            </div>
            
          </div>
          <div class="">
            <button type="submit" class="btn btn-secondary">Simpan</button>
            <a class="btn btn-secondary" href="{{ route('admin.index') }}" role="button">Kembali</a>
          </div>
       </form>
   </div>
        
@endsection