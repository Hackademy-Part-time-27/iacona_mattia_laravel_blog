



<x-layout title="Contatti">

    <div class="row mt-5">
        <div class="col-lg-6 mx-auto">
            <h1> Contatti </h1>
            <p class="fw-semibold fst-italic fs-4">Compila il modulo per metterti in contatto con noi!</p>

            <x-success />

            <x-error />


            <form action="{{ route('contatti.invia') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-6">
                        <label class="fst-italic fs-5" for="email">La tua email</label>
                        <input type="email" name="email" id="email" class="form-control fw-semibold fs-5">
                    </div>
                    <div class="col-6">
                        <img class="ms-5" style="max-width: 15%" src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <div class="col-12">
                        <label class="fst-italic fs-5" for="message">Il tuo messaggio</label>
                        <textarea name="message" id="message" rows="5" class="form-control fw-semibold fs-4"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning mt-5 fs-5 fw-bold text-light">Invia</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</x-layout>