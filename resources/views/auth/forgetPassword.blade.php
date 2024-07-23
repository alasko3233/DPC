@extends('layouts.app')

@section('content')


<div class="container">
    @if( session()->has('success') )
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
                        <img class="img-fluid" src="{{ asset('assets/images/carte_didentite.png') }}" alt="Republique du mali">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                       
                    <form action="{{ route('forget.password.post') }}" method="POST" class="form-signin">
                        @csrf

                        <div class="form-group row justify-content-center">

                    <span class="btn btn-success rounded-pill col-md-12 col-xl-8 col-xxl-8 col-sm-12 text-uppercase mb-2 pe-none">Réinitialiser le mot de passe</span>
                        <br>
                     
                            <div class="col-md-8 m-2">
                                <div class="input-group flex-nowrap">
                                    <input type="text" name="email"  class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email')}}" id="validationTooltipUsername" placeholder="E-mail" aria-describedby="validationTooltipUsernamePrepend">
                                </div>
                                @error ('email')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary px-5 rounded-pill font-weight-bold">
                                    Envoyer le lien
                                </button>
                            </div>
                        </div>
                        <br> <br> <br> <br>  <br> <br> 
                        <div class="form-group row mb-0 justify-content-center mt-1">
                            <div class="col-md-5 text-center">
                            Besoin d'aide ?<a class="btn btn-link" href="mailto:support@gmail.com">
                                contact@peage.ml
                                </a>
                            </div>
                        </div>
                    </form>
                    
                    </div>
                    <div class="col-md-2"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 

@endsection










