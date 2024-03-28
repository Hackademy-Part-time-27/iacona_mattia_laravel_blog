<x-layout title="Articoli">

<h1 class= "mt-5 mb-5">Articoli</h1>

<div>
     @if($articles)
          @foreach($articles as $article)              
              <x-card 
                    :title="$article->title"
                    :category="$article->category"
                    :description="$article->description"
                    :body="$article->body"
                    :route="route('article', $article)"
             />
          @endforeach
      @else
            <p>Nessun articolo da mostrare</p>
      @endif
    
</div>
</x-layout>









