@extends('layouts.master')
@section('title', 'Accueil')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="text-center">
                    <div class='row justify-content-center mx-1 mt-4'>
                        <span
                            class="col-md-12 col-xl-12 col-xll-12 col-sm-12 rounded-pill mb-2 text-uppercase smalls pe-none">
                            Ajouter - Type Produit</span>
                        <hr style="height: 6px;" class="bg-success">
                    </div>
                </div>

                <form action="{{ route('type_produit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-md-center">

                        <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                            <label id="add-label" class="form-label fw-bolder" for="name">Nom</label>
                            <input
                                class="form-control rounded border-success {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                type="text" name="name" id="add-input" value="{{ old('name') ?? '' }}"
                                placeholder="Saisissez le nom">
                            @error('name')
                                <div class="help-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                            <label id="add-label" class="form-label fw-bolder" for="prix_f">Prix Fournisseur</label>
                            <input
                                class="form-control rounded border-success {{ $errors->has('prix_f') ? 'is-invalid' : '' }}"
                                type="number" name="prix_f" id="add-input" value="{{ old('prix_f') ?? '' }}"
                                placeholder="Saisissez le Prix">
                            @error('prix_f')
                                <div class="help-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                            <label id="add-label" class="form-label fw-bolder" for="prix_v">Prix Revendeur</label>
                            <input
                                class="form-control rounded border-success {{ $errors->has('prix_v') ? 'is-invalid' : '' }}"
                                type="number" name="prix_v" id="add-input" value="{{ old('prix_v') ?? '' }}"
                                placeholder="Saisissez le Prix">
                            @error('prix_v')
                                <div class="help-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                            <label id="add-label" class="form-label fw-bolder" for="prix_c">Prix Client</label>
                            <input
                                class="form-control rounded border-success {{ $errors->has('prix_c') ? 'is-invalid' : '' }}"
                                type="number" name="prix_c" id="add-input" value="{{ old('prix_c') ?? '' }}"
                                placeholder="Saisissez le Prix">
                            @error('prix_c')
                                <div class="help-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>




                        <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2 my-2">
                            <label class="form-label fw-bolder text-uppercase label_color">Joindre Image</label>
                            <small class="text-success">Joindre Image </small>
                            {{-- <label class="form-label fw-bolder text-uppercase label_color" >Joindre fichier CSV</label> --}}
                            <input type="file"
                                class="form-control rounded border-success {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                name="image" id="contact" required />
                            @error('image')
                                <div class="help-block invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>





                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-md-8 col-xl-8 col-xxl-8 col-sm-8 my-2  my-2">

                            <div class="row justify-content-center mx-4 my-2">
                                <button type="submit"
                                    class="btn btn-success col-md-6 col-xl-6 col-sm-6  col-xxl-6 rounded-pill smalls">Ajouter
                                    <i data-feather='arrow-right'></i></button>
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
