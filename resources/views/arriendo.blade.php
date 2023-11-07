@extends('layout.main')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="https://colombiaestudia.com/wp-content/uploads/2023/02/logo_unab-virtual.png" alt="Bootstrap" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>

<h1 class="text-center m-5"> Arriendo Destacados </h1>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_alarcon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartaestudio</h5>
                    <p class="card-text">1 Habitacion</p>
                    <p class="card-text">1 baño</p>
                    <a href="#" class="btn btn-primary">INFORMACION</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_estudio_png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartamento</h5>
                    <p class="card-text">2 habitaciones</p>
                    <p class="card-text">1 Baño</p>
                    <p class="card-text">1 parqueadero</p>
                    <a href="#" class="btn btn-primary">INFORMACION</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/apto_cañaveral" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartamento</h5>
                    <p class="card-text">3 habitaciones</p>
                    <p class="card-text">2 Baños</p>
                    <a href="#" class="btn btn-primary my-background">INFORMACION</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/producto1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartaestudio</h5>
                    <p class="card-text">1 Habitacion</p>
                    <p class="card-text">2 BAños</p>
                    <p class="card-text">1 Parqueadero</p>
                    <a href="#" class="btn btn-primary my-background">INFORMACION</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/producto1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Apartamento</h5>
                    <p class="card-text">4 Habitaciones</p>
                    <p class="card-text">3 Baños</p>
                    <p class="card-text">2 Parqueaderos</p>
                    <a href="#" class="btn btn-primary my-background">INFROMACION</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection