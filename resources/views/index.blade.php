<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>My Portfolio | Aldi</title>
  </head>
  <body>
    {{-- <h1 class="">Hello, world!</h1> --}}

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-warning fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ url('img/alse.jpg') }}" alt="logo" width="40" class="shadow"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                  <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white mr-3" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white mr-3" href="#project">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white mr-3" href="#contact">Contact</a>
                </li>
                <li>
                    <a href="https://github.com/aldiskaxx29" class="nav-link text-white font-weight-bold">Github</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    {{-- navbar akhir --}}

    {{-- jubotron --}}
    <section class="jumbotron text-center">
        <img src="{{ url('img/aldi.png') }}" alt="aldi setiawan" width="200" class="rounded-circle img-thumbnail" data-aos="fade-in">
        <h1 class="display-4">Muhamad Aldi Setiwan</h1>
        <p class="lead">Web Developer</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,170.7C274.3,160,343,96,411,96C480,96,549,160,617,208C685.7,256,754,288,823,282.7C891.4,277,960,235,1029,229.3C1097.1,224,1166,256,1234,256C1302.9,256,1371,224,1406,208L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- akhir jumbotron --}}

    {{-- about --}}
    <section id="about" data-aos="fade-in"  data-aos-duration="2000">
        <div class="row text-center mb-3">
            <div class="col">
                <h1>About</h1>
            </div>
        </div>
        <div class="row justify-content-center font-size-5">
            <div class="col-4 text-center">
               <img src="{{ url('img/aldi.png') }}" alt="" width="50%">
            </div>
            <div class="col-4" style="text-align: justify;">
                Saya adalah seoang Web Developer, Saya
                Sangat termotivasi untuk terus
                mengembangkan kemampuan saya
                dan tumbuh secara profesional. Saya
                yakin dengan kemampuan saya
                untuk menghasilkan ide menarik
                untuk perusahaan yang saya pegang

            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffdead" fill-opacity="1" d="M0,224L34.3,208C68.6,192,137,160,206,165.3C274.3,171,343,213,411,197.3C480,181,549,107,617,96C685.7,85,754,139,823,170.7C891.4,203,960,213,1029,224C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
    {{-- akhir about --}}


    {{-- project --}}
    <section id="project">
        <div class="container">
            <div class="row text-center" data-aos="fade-in">
                <div class="col">
                    <h2>My Project</h2>
                </div>
            </div>
            <div class="row mt-3 justify-content-center md" >
                <div class="col-md-4 mb-3" data-aos="fade-up-right" data-aos-duration="2000">
                    <div class="card" >
                        <img src="{{ url('img/londri.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Laudry</strong>
                            <hr>
                            <small>Aplikasi laundy dibuat meggunakan Codeigniter 3</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-in"  data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/ppdb.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi PPDB dan Pembayaran Sekolah</strong>
                            <hr>
                            <small>Aplikasi PPDB dan Pembayaran Sekolah dibuat meggunakan Codeigniter 3</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up-left"  data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/monitoring.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Monitoring </strong>
                            <hr>
                            <small>Aplikasi Monitoring dibuat meggunakan Codeigniter 3</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/sales.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Sales</strong>
                            <hr>
                            <small>Aplikasi Sales dibuat meggunakan Codeigniter 3</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3"data-aos="flip-up" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/tokoonlin.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Toko Online</strong>
                            <hr>
                            <small>Aplikasi Toko Online dibuat meggunakan Wordpres</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="flip-right" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/sbn.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Company Profil</strong>
                            <hr>
                            <small>Aplikasi Company Profil dibuat meggunakan Wordpres</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/luxy.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Toko Online</strong>
                            <hr>
                            <small>Aplikasi Toko Online dibuat meggunakan Wordpres</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/pint.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Company Profil</strong>
                            <hr>
                            <small>Aplikasi Company Profil dibuat meggunakan Wordpres</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-out" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/koperasi.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Koperasi</strong>
                            <hr>
                            <small>Aplikasi Koperasi dibuat meggunakan Codeigniter 3</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/pakar.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Bilbel</strong>
                            <hr>
                            <small>Aplikasi Bimbel Online dibuat meggunakan Wordpres</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/tk.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Toko Online</strong>
                            <hr>
                            <small>Aplikasi Toko Online dibuat meggunakan Laravel</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/pengaduan.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Laporan Kehilangan Barang</strong>
                            <hr>
                            <small>Aplikasi Laporan Kehilangan Barang dibuat meggunakan Laravel</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="zoom-in-up" data-aos-duration="2000">
                    <div class="card">
                        <img src="{{ url('img/haji.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <strong>Aplikasi Jamaah Haji / Umrah</strong>
                            <hr>
                            <small>Aplikasi Jamaah Haji / Umrah dibuat meggunakan Codeigniter</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L34.3,80C68.6,96,137,128,206,138.7C274.3,149,343,139,411,128C480,117,549,107,617,133.3C685.7,160,754,224,823,256C891.4,288,960,288,1029,277.3C1097.1,267,1166,245,1234,213.3C1302.9,181,1371,139,1406,117.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
    {{-- akhir project --}}

    {{-- contact --}}
    <section id="contact">
        <div class="container">
            <div class="row text-center" data-aos="fade-in" data-aos-duration="2000">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-3 mb-2" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="col-md-8">
                    <form action="{{ url('kirim-email') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" rows="5" class="form-control" placeholder="Masukan Pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Kirim</button>
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="md-3">
                            {{-- <i class="fas fa-whatsapp"></i> --}}
                        </div>
                        <div class="md-3"></div>
                        <div class="md-3"></div>
                        <div class="md-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,256L34.3,250.7C68.6,245,137,235,206,218.7C274.3,203,343,181,411,170.7C480,160,549,160,617,181.3C685.7,203,754,245,823,234.7C891.4,224,960,160,1029,149.3C1097.1,139,1166,181,1234,208C1302.9,235,1371,245,1406,250.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
    {{-- akhir conact --}}


    {{-- footer --}}
    <footer class="bg-warning text-white text-center pb-3">
        <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/aldiskax29" class="text-white font-weight-bold">Aldi Setiawan</a></p>
    </footer>
    {{-- akhir footer --}}


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>