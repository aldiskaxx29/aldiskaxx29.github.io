@extends('template_admin/app')

@section('title','Dashboard')

@section('content')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>@yield('title')</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data User</h4>
                  </div>
                  <div class="card-body">
                    @php
                        $user = DB::table('users')->count();
                        echo $user;
                    @endphp
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-store"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Pesan</h4>
                  </div>
                  <div class="card-body">
                    @php
                        $pesan = DB::table('pesan')->count();
                        echo $pesan;
                    @endphp
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-shopping-basket"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Kategori</h4>
                  </div>
                  <div class="card-body">
                    @php
                        $kategori = DB::table('kategori')->count();
                        echo $kategori;
                    @endphp
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
    </section>
</div>

@endsection