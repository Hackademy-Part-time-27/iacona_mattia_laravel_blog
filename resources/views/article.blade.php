<x-layout>

  @if($article->image)

    <img class="w-25 rounded mx-auto d-block mt-5 shadow-lg" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">

  @endif

<h1 class="title mt-5 mb-5">{{ $article->title }}</h1>



<div>
<h2 class="mb-3"> {{ $article->category->name }} </h2>

<h3> {{ $article->description }} </h3>

</div>
<div> 
  <div class="mt-5 mb-5 fs-2">
    {{ $article['body'] }}
  </div>
</div>


<div>
  <button type="button" class="btn btn-warning mt-5 fs-5 fw-bold"> <a class="text-light text-decoration-none"href= "/articoli">Torna agli articoli</a></button>
</div>
</x-layout>