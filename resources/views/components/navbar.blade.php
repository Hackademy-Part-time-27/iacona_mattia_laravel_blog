


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <a class="navbar-brand">
          <img style="max-width: 15%" src="{{ asset('img/logo.png') }}" alt="">
        <strong>{{ config('app.name') }}</strong></a>    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('articles') }}">Articoli</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('chi-sono') }}">Chi sono</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
              </li>
              
          </ul>
          @auth


            <a class="me-5 fw-bold nav-link text-black" href=""><strong>{{ auth()->user()->email }}</strong></a>

            <a href="{{ route('users.search') }}" class="btn btn-warning fw-bold me-4">RICERCA UTENTE</a>
            <a href="{{ route('articles.index') }}" class="btn btn-warning fw-bold me-4">GESTIONE ARTICOLI</a>
            <a href="{{ route('categories.index') }}" class="btn btn-warning fw-bold me-4">GESTIONE CATEGORIE</a>
            
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger fw-bold me-2">ESCI</button>
            </form>   

          @else
            <a href="/login" class="btn btn-warning fw-bold me-4">ACCEDI</a>
            <a href="/register" class="btn btn-warning fw-bold">REGISTRATI</a>


          @endauth
        </div>
  </div>
</nav>