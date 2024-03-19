<x-layout>


<h1 class="title mt-5 mb-5">{{ $article['title'] }} </h1>

<div>
<h2 class="mb-3"> {{ $article['category'] }} </h2>

<h3> {{ $article['description'] }} </h3>
</div>
<div>
  <button type="button" class="btn btn-warning mt-5 fs-5 fw-bold"> <a class="text-light text-decoration-none"href= "/articoli">Torna agli articoli</a></button>
</div>
</x-layout>