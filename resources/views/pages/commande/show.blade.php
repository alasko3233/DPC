@extends('layouts.master')
@section('title', 'Accueil')
@section('content')

    <!-- Product section-->
    <form action="{{ route('acheter', $type->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $type->imgUrl() }}" alt="..." />
                    </div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder">{{ $type->nom_type }}</h1>
                        <div class="fs-5 mb-5">
                            @hasrole(['client'])

                                <p class="text-muted  m-0">Prix :
                                    {{ number_format($type->prix_c, 0, ',', ' ') ?? '' }} F CFA</p>
                            @endrole
                            @hasrole(['revendeur'])

                                <p class="text-muted  m-0">Prix :
                                    {{ number_format($type->prix_v, 0, ',', ' ') ?? '' }} F CFA</p>
                            @endrole
                        </div>
                        <div class="col-md-6 col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2" id="add-cls">
                            <label id="add-label" class="form-label fw-bolder" for="phone">Numero de telephone </label>
                            <input
                                class="form-control rounded border-success {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                type="text" name="phone" id="add-input" value="{{ old('phone') ?? '' }}"
                                placeholder="Saisissez votre numero de telephone">
                            @error('phone')
                                <div class="help-block invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="d-flex">
                            @hasrole(['client'])

                                <input class="form-control text-center me-3" id="inputQuantity" type="numberx" name="qte"
                                    value="1" style="max-width: 4rem" />
                            @endrole
                            @hasrole(['revendeur'])

                                <input class="form-control text-center me-3" id="inputQuantity" type="number" name="qte"
                                    value="10" min="10" style="max-width: 4rem" />

                            @endrole

                            <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Acheter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </form>

@endsection
