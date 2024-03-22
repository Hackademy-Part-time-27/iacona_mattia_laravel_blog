

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Grazie!</h4>
    <p>Il tuo messaggio è stato inviato correttamente!</p>
    <hr>
    <p class="mb-0">Riceverai una risposta al più presto!</p>
  </div>
@endif