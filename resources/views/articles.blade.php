<x-layout title="Articoli">

      <div class="container text-center">
            
                  <div class="col">
                        <h1 class= "mt-5 mb-5">Articoli</h1>
                  </div>      
                  <div class="col">      
                        <a href="{{ route('articles.create') }}" class="btn btn-warning fw-bold mb-5">CREA ARTICOLO</a>
                  </div> 
            
      </div>   
      <div>
            @if($articles)
                @foreach($articles as $article)
                    <x-card
                        :category="$article->category"
                        :title="$article->title"
                        :description="$article->description"
                        :route="route('article', $article)"
                    />
                @endforeach
            @else
                <p>Non ci sono articoli disponibili</p>
            @endif
        </div>
           
</x-layout>









