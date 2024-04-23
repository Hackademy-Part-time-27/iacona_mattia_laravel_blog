<div>
    <div class="row g-4">
        <div class="col-12">
            <input type="text" class="form-control w-25 p-3 fs-5" placeholder="Cerca Utente" wire:model.live="search">
        </div>
        <div class="col-12">
            <h3 class="mb-3">Elenco Utenti</h3>

            <ul class="list-group list-group-flush w-50 p-3">
                @foreach ($users as $user)
                    <li class="list-group-item fs-4">{{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
