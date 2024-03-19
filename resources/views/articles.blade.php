<x-layout title="Articoli">

<h1 class= "mt-5 mb-5">Articoli</h1>

<div>
     @if($articles)
          @foreach($articles as $index => $article)
              @if($article['visible'])
              <x-card 
                    :title="$article['title']"
                    :category="$article['category']"
                    :description="$article['description']"
                    :index="$index"
                    :route="route('article', $index)"

              />
              @endif
          @endforeach
      @else
            <p>Nessun articolo da mostrare</p>
      @endif
    
</div>
</x-layout>









