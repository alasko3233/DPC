@extends('dashboard.layout.app')

@section('contentdash')


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="text-center">
                <div class='row justify-content-center mx-1 mt-4'>
                    <span class="col-md-12 col-xl-12 col-xll-12 col-sm-12 rounded-pill mb-2 text-uppercase smalls pe-none"> Ajouter - Membres</span>
                    <hr style="height: 6px;" class="bg-success">
                </div>
            </div>

            <form action="{{route('manage-membre.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-md-center">
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="genre">Civilité </label>
                        <select class="form-control {{ $errors->has('genre') ? 'is-invalid' : '' }} border-success" name="genre" id="inputPassword">
                            <option disabled selected>Selectionnez</option>
                            <option value="Mr">M.</option>
                            <option value="Mme">Mme</option>
                        </select>
                            @error ('genre')
                                        <span class="help-block invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Prenom</label>
                        <input class="form-control rounded border-success {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="prenom" id="add-input" value="{{ old('prenom') ?? '' }}" placeholder="Saisissez le prenom">
                        @error('lastname')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Nom</label>
                        <input class="form-control rounded border-success {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="nom" id="add-input" value="{{ old('name') ?? '' }}" placeholder="Saisissez le nom">
                        @error('firstname')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="phone">Numéro de téléphone</label>
                        <input class="form-control rounded border-success {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="add-input" value="{{ old('phone') ?? '' }}" placeholder="Saisissez le numéro de téléphone ">
                        @error('phone')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="email">E - mail </label>
                        <input class="form-control rounded border-success {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="add-input" value="{{ old('email') ?? '' }}" placeholder="Saisissez l' e-mail">
                        @error('email')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="email">Poste </label>
                        <input class="form-control rounded border-success {{ $errors->has('poste') ? 'is-invalid' : '' }}" type="text" name="poste" id="add-input" value="{{ old('poste') ?? '' }}" placeholder="Saisissez son poste">
                        @error('poste')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2 my-2">
                        <label class="form-label fw-bolder text-uppercase label_color" >Joindre l'image</label>
                        <small class="text-success">Joindre image </small>
                        {{-- <label class="form-label fw-bolder text-uppercase label_color" >Joindre fichier CSV</label> --}}
                        <input type="file" class="form-control rounded border-success {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="contact"  required/>
                        @error('image')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror  
                    </div>


                  
                   
                  
                  
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-8 col-xl-8 col-xxl-8 col-sm-8 my-2  my-2">
                     
                        <div class="row justify-content-center mx-4 my-2">
                                <button type="submit" class="btn btn-success col-md-6 col-xl-6 col-sm-6  col-xxl-6 rounded-pill smalls">Ajouter <i data-feather='arrow-right'></i></button>
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