<x-layout title="Crea Articolo">

    <div class="row">

        <div class="col-lg-6 mx-auto">

            <h1 class="mt-5">Crea il tuo articolo</h1>

            <x-success />

            <div class="mt-5">
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="title" >Titolo</label>
                            <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror" maxlength="150" value="{{ old('title') }}">
                            @error('title') <span class="text-warning small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="category">Categoria</label>
                            <input type="text" name="category" id="category"
                            class="form-control @error('category') is-invalid @enderror" maxlength="50" value="{{ old('category') }}">
                            @error('category') <span class="text-warning small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="description">Breve descrizione</label>
                            <textarea name="description" id="description"
                            class="form-control @error('description') is-invalid @enderror"
                            rows="5" maxlength="255">{{ old('description') }}</textarea>
                            @error('description') <span class="text-warning small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="body">Contenuto dell'articolo</label>
                            <textarea name="body" id="body" class="form-control" rows="20" maxlength="5000">{{ old('body') }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="image">Immagine</label>
                            <input type="file" name="image" id="image"
                            class="form-control @error('image') is-invalid @enderror">
                            @error('image') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning mt-5 fs-5 fw-bold">Crea</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>       
    </div>
</x-layout>
