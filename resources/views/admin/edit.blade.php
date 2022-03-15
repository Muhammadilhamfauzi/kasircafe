@extends('layout.main')
@section('content')


   <div class="container">
       <h2>Halaman Edit User</h2>
       @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
       <form action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
          <div class="mb-3 row">
              
            <label for="name" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-8">
              <input type="text" name="nama" class="form-control" id="names" placeholder="" value="{{ $admin->nama }}">
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-8">
              <input type="text" name="username" class="form-control" id="" placeholder="" value="{{ $admin->username }}">
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" id="" placeholder="" value="{{ $admin->password }}">
            </div>
          </div>
          <div class="mb-3 row">
              
            <label for="" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-8">
              <input type="text" name="role" class="form-control" id="" placeholder="" value="{{ $admin->role }}">
            </div>
            
          </div>
          <div class="">
            <button type="submit" class="btn btn-secondary">Update</button>
            <a class="btn btn-secondary" href="{{ route('admin.index') }}" role="button">Kembali</a>
          </div>
       </form>
   </div>
        
@endsection