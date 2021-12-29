@extends('template_admin/app')

@section('title','Data Kategori')

@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>@yield('title')</h1>
      </div>

      <div class="section-body">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plush"></i> Tambah Data</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nam Kategori</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            @foreach ($kategori as $no => $item)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $item->nama_kategori }}</td>
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


{{-- Modal Tambah --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal Ubah Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('tambah-kategori') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="" class="form-control">
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
  
  <!-- Modal Ubah-->
  @foreach ($kategori as $item)
  <div class="modal fade" id="exampleModalUbah{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal Ubah Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('ubah-status') }}/{{ $item->id }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="0">Belum</option>
                    <option value="1">Sudah</option>
                </select>
                @error('status')
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
  @endforeach

@endsection