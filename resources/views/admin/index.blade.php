
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
   <div class="container">

    <h2>Halaman User</h2>
    @if ($message = Session::get('danger'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
    <a class="mb-2 btn btn-secondary" href="{{ route('admin.create') }}" role="button">Create</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">Role</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $user)
            
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $user->nama}}</td>
          <td>{{ $user->username}}</td>
          <td>{{ $user->role}}</td>
          <td>
            {{-- <a href="{{ route('admin.edit',$user->id) }}">Edit</a>
            <a href="{{ route('admin.destroy',$user->id) }}">Hapus</a> --}}

            <form action="{{ route('admin.destroy',$user->id) }}" method="POST">
           
              <a class="btn btn-primary" href="{{ route('admin.edit',$user->id) }}">Edit</a>

              @csrf
              @method('DELETE')
  
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </td>
        </tr>
       
        @endforeach
      </tbody>
    </table>
   </div>
 </div>

   
        
@endsection