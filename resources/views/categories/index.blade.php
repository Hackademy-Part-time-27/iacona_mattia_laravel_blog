<x-layout title="Categorie">

    <div class="row mt-5">
        <div class="col-lg-6">
            <h1>Categorie</h1>
        </div>
        <div class="col-lg-6 mt-5">
            <a href="{{ route('categories.create') }}" class="btn btn-warning mt-5 fs-5 fw-bold">CREA CATEGORIA</a>
        </div>
    </div>

    <x-success />

    <table class="table table-secondary table-striped mt-5">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th class="text-end">AZIONI DISPONIBILI</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-end">
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning fw-bold me-4">MODIFICA</a>
                    <form class="d-inline" action="{{ route('categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger fw-bold">ELIMINA</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>