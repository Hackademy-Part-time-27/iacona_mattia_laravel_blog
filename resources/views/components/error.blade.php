

@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Ops!</h4>
    <p>Uno o più campi sono vuoti!</p>
    <hr>
    <p class="mb-0">Compila tutti i campi per poterci contattare.</p>
</div>
@endif