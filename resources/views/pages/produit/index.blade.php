@extends('layouts.master')
@section('title', 'Accueil')
@section('content')

    <div class="container">
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                {{ session()->get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row mt-2 d-flex justify-content-center text-center ">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>Message : </strong> {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>Succès : </strong> {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header">
                <div class=" justify-content-center text-center">
                    <h4>Liste - Produits</h4>
                </div>
                @hasrole('producteur')
                    <div class=" justify-content-center text-right">
                        <a class="btn btn-success col-auto rounded-pill px-4" href="{{ route('produits.create') }}">
                            Ajouter <i class="fas fa-plus" aria-hidden="true "></i>
                        </a>
                </div> @endrole


            </div>
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @hasrole('producteur')
                            @foreach ($produits as $produit)
                                <div class="col mb-5">
                                    <div class="card h-100">

                                        <a href="{{ route('produits.show', $produit->id) }}">
                                            <!-- Product image-->
                                            <img class="card-img-top" src="{{ $produit->type->imgUrl() }}" alt="..." />
                                            <!-- Product details-->
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">{{ $produit->type->nom_type }}</h5>
                                                    <!-- Product reviews-->
                                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                        <div class="bi-star-fill"></div>
                                                    </div>
                                                    <!-- Product price-->

                                                    <p class="text-muted  m-0">quantite :
                                                        {{ number_format($produit->qte, 0, ',', ' ') ?? '' }} </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add
                                                    to
                                                    cart</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endrole
                        @hasrole(['client', 'revendeur'])
                            @foreach ($produits as $produit)
                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute"
                                            style="top: 0.5rem; right: 0.5rem">
                                            Sale
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
                                                {{-- <p class="text-muted  m-0">Fournisseur :
                                                {{ number_format($produit->prix_f, 0, ',', ' ') ?? '' }} F CFA</p>
                                            <p class="text-muted  m-0">Revendeur :
                                                {{ number_format($produit->prix_f, 0, ',', ' ') ?? '' }} F CFA</p> --}}
                                                @hasrole(['client'])

                                                    <p class="text-muted  m-0">Prix :
                                                        {{ number_format($produit->prix_c, 0, ',', ' ') ?? '' }} F CFA</p>
                                                @endrole
                                                @hasrole(['revendeur'])
                                                    <p></p>
                                                    <p class="text-muted  m-0">Prix :
                                                        {{ number_format($produit->prix_v, 0, ',', ' ') ?? '' }} F CFA</p>
                                                    @if ($produit->stock)
                                                        <p>Quantité en stock: {{ $produit->stock->qte }}</p>
                                                    @else
                                                        <p>pas de stock </p>
                                                    @endif
                                                @endrole
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="{{ route('produits.show', $produit->id) }}">acheter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endrole


                    </div>
                </div>
            </section>

        </div>

    @endsection
