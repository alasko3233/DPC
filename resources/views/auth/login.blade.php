@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @elseif(session()->has('message'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cards">
                    <div class="card-bodys">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid" src="{{ asset('assets/img/logo_kalanso.png') }}"
                                    alt="Republique du mali">
                            </div>
                        </div>
                        <br>
                        @error('email')
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                <strong>Email ou mot de passe incorrect</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fas fa-user"></i></span>
                                                <input aria-describedby="basic-addon1" id="email" type="text"
                                                    class="form-control
                                                     {{-- @error('email') is-invalid @enderror --}}
                                                    "
                                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                                    placeholder="adresse email">
                                            </div>
                                            {{-- @error('email')
                                                <span class="text-danger" role="alert" style="">
                                                    <strong>Identifiant ou mot de passe incorrect</strong>
                                                </span>
                                            @enderror --}}
                                        </div>
                                    </div>

                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-8 input">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fas fa-lock"></i></span>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password"
                                                    placeholder="mot de passe">
                                                <span class="input-group-text"><i class="fas fa-eye-slash"
                                                        style="cursor: pointer;" onclick="display(this)"></i></span>

                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Identifiant ou mot de passe incorrect</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-5 text-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Se souvenir de moi') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0 justify-content-center">
                                        <div class="col-md-6 text-center">
                                            <button type="submit"
                                                class="btn btn-primary px-5 rounded-pill font-weight-bold">
                                                {{-- {{ __('Connexion') }} --}}
                                                Se connecter
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 justify-content-center mt-1">
                                        <div class="col-md-5 text-center">
                                            <a class="btn btn-link" href="#">
                                                {{ __('Mot de passe oublié ?') }}
                                            </a>
                                        </div>
                                    </div> <br> <br>
                                    {{-- <div class="form-group row mb-0 justify-content-center mt-1">
                                        <div class="col-md-5 text-center">
                                            Besoin d'aide ? <a class="btn-link"
                                                href="mailto:contact@peage.ml">contact@peage.ml
                                            </a>
                                        </div>
                                    </div> --}}
                                </form>

                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var elt = document.getElementById('password');

        function display(e) {

            if (elt.value === '') {} else {
                if (elt.type === "password") {
                    elt.type = "text";
                    e.classList.remove("fa-eye-slash");
                    e.classList.add("fa-eye");
                } else {
                    e.classList.remove("fa-eye");
                    e.classList.add("fa-eye-slash");
                    elt.type = "password";
                }
            }
        }
    </script>
@endsection
