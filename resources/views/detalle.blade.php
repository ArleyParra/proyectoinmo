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

<div class="card" style="width: 18rem;">
  <img src="https://i.blogs.es/c0db59/snipshot_b2dmnccj5o3/1366_2000.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wii Phone</h5>
    <p class="card-text">Wii Phone LMAO</p>
    <a href="#" class="btn btn-primary">Get your broke ass a Wii Phone</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://www.tuexpertojuegos.com/wp-content/uploads/2011/06/xbox45front.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">XBOX 720</h5>
    <p class="card-text">XBOX 720 LMAO</p>
    <a href="#" class="btn btn-primary">Get your broke ass an XBOX 720</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">I ran out of ideas</h5>
    <p class="card-text">IDK</p>
    <a href="#" class="btn btn-primary">???</a>
  </div>
</div>
@endsection

