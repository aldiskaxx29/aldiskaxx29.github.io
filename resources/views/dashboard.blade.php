<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Company Profil</title>

    <style>
      .jumbotron{
        height: 550px;
        background-image: url(img/slide1.jpg);
        background-size: 100%;
        background-position: center;
      }
    </style>

  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left:auto;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#servic">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contac">Contac</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron bg-danger text-white">
      <div style="position: absolute;margin-left:130px;">
        <h1 class="display-4" style="margin-top: 200px;">M. Aldi Setiwan</h1>
        <p class="lead">Web Developer</p>
        <hr class="my-4">
        {{-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> --}}
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Hubungi</a>
        </p>
      </div>
    </div>


<div class="container">
    <h2 style="margin-top: 50px;margin-bottom: 50px;text-align: center;" id="about">About</h2>
    <div class="row">
      <div class="col-md-6">
        <p>Poto</p>
      </div>
      <div class="col-md-6">
        <p>

            Sangat termotivasi untuk terus mengembangkan kemampuan saya dan 
            tumbuh secara profesional. Saya yakin dengan kemampuan saya untuk 
            menghasilkan ide menarik untuk perusahaan yang saya pegang
        </p>
      </div>
    </div>
</div>

<div class="container">
  <h2 style="margin-top:50px;margin-bottom:50px;text-align:center">Kenapa Memilih Kami</h2>

  <div class="row text-center">
    <div class="col-md-4">
      <i class="fa fa-users" style="font-size:50px;"></i>
      <h3>Tim Profesional</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
    </div>
    <div class="col-md-4">
      <i class="fa fa-users" style="font-size:50px;"></i>
      <h3>Tim Profesional</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
    </div>
    <div class="col-md-4">
      <i class="fa fa-users" style="font-size:50px;"></i>
      <h3>Tim Profesional</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
    </div>
  </div>

  <div class="row text-center mt-3">
    <div class="col-md-4">
      <i class="fa fa-users" style="font-size:50px;"></i>
      <h3>Tim Profesional</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
    </div>
    <div class="col-md-4">
      <i class="fa fa-users" style="font-size:50px;"></i>
      <h3>Tim Profesional</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
    </div>
    <div class="col-md-4">
      <i class="fa fa-users" style="font-size:50px;"></i>
      <h3>Tim Profesional</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</small>
    </div>
  </div>
</div>

<div class="container">
  <h2 style="margin-top:50px;margin-bottom:50px;text-align: center;" id="servic">Service</h2>
  <div class="row">
    <div class="col-md-6">
      <img src="img/slide2.jpg" style="width: 100%;">
    </div>
    <div class="col-md-6">
      <h3>Desain Website</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small><br>
      <a href="#" class="btn btn-primary mt-2">Detail</a>
    </div>
  </div>

  <div class="row" style="text-align: right;margin-top:10px;">
    <div class="col-md-6">
      <h3>Desain Website</h3>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small><br>
      <a href="#" class="btn btn-primary mt-2">Detail</a>
    </div>
    <div class="col-md-6">
      <img src="img/slide2.jpg" style="width: 100%;">
    </div>
  </div>
</div>

<div class="container">
  <h2 style="margin-top:50px;margin-bottom:50px;text-align:center" id="contac">Contact</h2>
  <div class="card">
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Subjek</label>
          <input type="text" name="subjek" class="form-control">
        </div>
        <div class="form">
          <label>Isi</label>
          <textarea class="form-control" rows="5"></textarea>
        </div>
      </form>
    </div>
  </div>
</div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>