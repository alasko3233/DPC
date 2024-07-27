@extends('layouts.master')
@section('title', 'Accueil')
@section('content')


    <div class="container">
        <div class="card-header">
            <div class=" justify-content-center text-center">
                <h4>Liste - Type Produits</h4>
            </div>
            <div class=" justify-content-center text-right">
                <a class="btn btn-success col-auto rounded-pill px-4" href="{{ route('type_produit.create') }}">
                    Ajouter <i class="fas fa-plus" aria-hidden="true "></i>
                </a>
            </div>

        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            @foreach ($produits as $produit)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ $produit->imgUrl() }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $produit->nom_type }}</h5>
                                <!-- Product reviews-->

                                <!-- Product price-->
                                <p class="text-muted  m-0">Fournisseur :
                                    {{ number_format($produit->prix_f, 0, ',', ' ') ?? '' }} F CFA</p>
                                <p class="text-muted  m-0">Revendeur :
                                    {{ number_format($produit->prix_f, 0, ',', ' ') ?? '' }} F CFA</p>
                                <p class="text-muted  m-0">Syndicat :
                                    {{ number_format($produit->prix_c, 0, ',', ' ') ?? '' }} F CFA</p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="{{ route('type_produit.edit', $produit->id) }}">Modifier</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>




@endsection
