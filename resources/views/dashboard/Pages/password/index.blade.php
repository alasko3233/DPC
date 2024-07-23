@extends('dashboard.layout.app')

@section('contentdash')

<div class="container">
    <div class="row m-4 pt-4">
    
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="text-center">
                <div class='row justify-content-center mx-1 mt-4'>
                    <span class="col-md-12 col-xl-12 col-xll-12 col-sm-12 rounded-pill mb-2 text-uppercase smalls pe-none"> Changer le mot de passe</span>
                    <hr style="height: 6px;" class="bg-success">
                </div>
            </div>
            <form action="{{route('change-password.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-md-center">
                  
                  
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Mot de passe actuel</label>
                        <input class="form-control rounded border-success {{ $errors->has('current_password') ? 'is-invalid' : '' }}" name="current_password" type="password" name="name" id="add-input" value="{{ old('current_password') ?? '' }}" placeholder="Entrer le mot de passe actuel">
                        @error('current_password')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                   

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2" id="nom">
                        <label class="form-label fw-bolder" for="new_password">Nouveau mot de passe</label>
                        <input class="form-control rounded border-success {{ $errors->has('new_password') ? 'is-invalid' : '' }}" type="password" name="new_password" id="placeholderAutre" value="{{ old('new_password') ?? '' }}" placeholder="Entrer le Nouveau mot de passe">
                        @error('new_password')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2" id="nom">
                        <label class="form-label fw-bolder" for="confirm_password">Confirmer</label>
                        <input class="form-control rounded border-success {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}" type="password" name="confirm_password" id="placeholderAutre" value="{{ old('confirm_password') ?? '' }}" placeholder="Confirmer le nouveau mot de passe">
                        @error('confirm_password')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-8 col-xl-8 col-xxl-8 col-sm-8 my-2  my-2">
                        <div class="row justify-content-center mx-4 my-2">
                                <button type="submit" style="background-color:#ff6805; border-color:#ff6805;" class="btn btn-success col-md-6 col-xl-6 col-sm-6  col-xxl-6 rounded-pill smalls">Sauvegarder les modifications <i data-feather='arrow-right'></i></button>
                        </div>
                    </div> 
                </div> 
            </form>

            <br>
            <div class="col-md-1"></div> 
        </div> 
    </div>
</div>

@endsection