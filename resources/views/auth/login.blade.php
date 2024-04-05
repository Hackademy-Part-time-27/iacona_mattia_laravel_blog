<x-layout title="Accedi">

    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="mt-5 text-center">Login</h1>
                <div>
                    <img class="mx-auto d-block mt-4" style="max-width: 15%" src="{{ asset('img/logo.png') }}" alt="">
                </div>
            <div class="mt-4">
                <form action="/login" method="POST">
                @csrf
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            @error('name') <span class="small text-warning">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('name') <span class="small text-warning">{{ $message }}</span> @enderror
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning mt-5 fs-5 fw-bold position-absolute 
                            start-50 translate-middle mt-1">Accedi</button>    
                        </div>
                       

                    </div>
                </form>
            </div>
        </div>    
    </div>




</x-layout>