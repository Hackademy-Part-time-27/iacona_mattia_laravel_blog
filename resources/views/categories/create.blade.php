<x-layout title="Crea Categoria">
    
    <div class="mt-5">
        <a href="{{ route('categories.index') }}" class="text-warning">Categorie</a>
        <h1 class="mt-5">Crea Categoria</h1>
    </div>    
        <x-success />

    <div class="my-5">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name') <span class="text-warning small fw-bold">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning mt-5 fs-5 fw-bold">Crea</button>
                </div>
            </div>
        </form>
    </div>    
</x-layout>