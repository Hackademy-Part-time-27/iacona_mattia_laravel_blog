
<x-layout :title="$title">
    <div class= "container text-center mt-5">
        <h1 style="font-size: 100px"> {{ $title }} </h1>
    </div>
    <div class="container">
        <div class="text-center">
            <h2 class="mt-5">“L'antropologia richiede apertura mentale per poter guardare e ascoltare,<br> 
                registrare con stupore e meravigliarsi di ciò che non si sarebbe potuto indovinare.”</h2>
            <footer class="fst-italic text-end">Margaret Mead</footer>
        </div>    
    </div>
    <div class="container mt-5">
        <div class="text-center">
            <h2>I nostri articoli più recenti</h2>
        </div>
        <div class="mt-5">
            <ul class="list-group">
                @foreach($articles as $article)
                
                <a href="{{ route('article', $article, ['id' => $article->id]) }}" 
                    class="list-group-item list-group-item-action text-bg-light p-3">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{ $article->title }}</h5>
                      <small>{{ $article->created_at }}</small>
                    </div>
                        <p class="mb-1">{{ $article->category }}</p>
                        <small>{{ $article->description }}</small>
                </a>
                @endforeach
            </ul>
        </div>
    </div>

</x-layout>

    
