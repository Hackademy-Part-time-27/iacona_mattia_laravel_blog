<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antropologia Facile | Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-bg-secondary p-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Antropologia Facile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/articoli">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chi-sono">Chi sono</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/contatti">Contatti</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/">Action</a></li>
            <li><a class="dropdown-item" href="/chi-sono">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/contatti">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1 class= "mt-5 mb-5">Articoli</h1>



<div>
     @if($articles)
        @foreach($articles as $index =>$article)
        <div class="container text-center">
          <div class="card mb-2">
              <div class="card-body">
                    <h2 class="card-title"> {{ $article['title'] }} </h2>
                    <h3 class="card-subtitle mb-2 text-body-secondary"> {{ $article['category'] }} </h3>
                    <p class="card-text"> {{ $article['description'] }} </p>
                    <a class="stretched-link" href=" {{ route('article', $index)}} ">Approfondisci</a>
              </div>
          </div>
        </div>
        @endforeach
      @else
            <p>Nessun articolo da mostrare</p>
      @endif
    
</div>


