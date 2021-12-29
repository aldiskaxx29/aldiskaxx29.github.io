@extends('template_admin/app')

@section('title','Data User')

@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>@yield('title')</h1>
      </div>

      <div class="section-body">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plush"></i> Tambah Data</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            @foreach ($user as $no => $item)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
      </div>
    </section>
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="tambah-user" method="post">
              @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="" class="form-control" autofocus required>
                @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="konfirmasipassword" id="" class="form-control" required>
                @error('konfirmasipassword')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="float-right">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </form>
    </div>
      </div>
    </div>
  </div>

@endsection