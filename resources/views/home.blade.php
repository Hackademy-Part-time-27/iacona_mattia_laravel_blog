
<x-layout :title="$title">
    <div class= "container text-center mt-5">
        <h1> {{ $title }} </h1>
    </div>
<div class="mt-5">
    <ul>
        @foreach($articles as $article)
        <li>{{ $article->id }} {{ $article->title }}</li>
        @endforeach
    </ul>
    {{-- $articles->links() --}} {{-- vale per paginate --}}
</div>
</x-layout>

    
