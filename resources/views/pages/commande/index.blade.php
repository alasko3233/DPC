@extends('layouts.master')
@section('title', 'Accueil')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
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
                    <h4>Liste - Des Commande</h4>
                </div>



            </div>
            <section class="py-5">
                <div class="card mb-4">
                    <div class="card-header">
                        <div
                            class=" row row-cols-1 row-cols-xl-6 text-nowrap float-xl-start float-xxl-start text-md-center">
                            <!-- Total des prix pour paymentss -->

                            @if ($recherche == null)
                                <div name="total"
                                    class="btn btn-primary col-xl-auto py-1 px-3 text-uppercase smalls me-1 my-2">
                                    Total = {{ $paymentss->sum('qte') }} =
                                    {{ number_format(
                                        $paymentss->reduce(function ($carry, $payment) {
                                            return $carry + $payment->prix_c * $payment->qte;
                                        }, 0),
                                        0,
                                        ',',
                                        ' ',
                                    ) }}
                                    F
                                </div>
                                @foreach ($types as $type)
                                    <div name="total"
                                        class="btn btn-primary col-xl-auto py-1 px-3 text-uppercase smalls me-1 my-2">
                                        {{ $type->nom_type }} :
                                        {{ $paymentss->where('type_id', $type->id)->sum('qte') }}
                                        =
                                        {{ number_format(
                                            $paymentss->where('type_id', $type->id)->reduce(function ($carry, $payment) {
                                                return $carry + $payment->prix_c * $payment->qte;
                                            }, 0),
                                            0,
                                            ',',
                                            ' ',
                                        ) }}
                                        F
                                    </div>
                                @endforeach
                            @else
                                <div name="total"
                                    class="btn btn-primary col-xl-auto py-1 px-3 text-uppercase smalls me-1 my-2">
                                    Total = {{ $paymentss->count() * $paymentss->sum('qte') }} =
                                    {{ number_format($paymentss->sum('prix_c') * $paymentss->sum('qte'), 0, ',', ' ') }} F
                                </div>
                                @foreach ($types as $type)
                                    <div name="total"
                                        class="btn btn-primary col-xl-auto py-1 px-3 text-uppercase smalls me-1 my-2">
                                        {{ $type->nom_type }} :
                                        {{ $paymentss->where('type_id', $type->id)->count() * $paymentss->where('type_id', $type->id)->sum('qte') }}
                                        =
                                        {{ number_format($paymentss->where('type_id', $type->id)->sum('prix_c') * $paymentss->where('type_id', $type->id)->sum('qte'), 0, ',', ' ') }}
                                        F
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class=" justify-content-center">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="data_table">
                                    <table id="myTable"
                                        class="table table-bordered table-responsive-sm table-responsive  table-hover">
                                        <thead class="thead-light text-uppercase text-nowrap text-center">
                                            <tr>
                                                {{-- <th scope="col" >Vol </th> --}}



                                                <th scope="col">Produit </th>
                                                <th scope="col">Prix Fcfa</th>
                                                <th scope="col">Quantite </th>
                                                <th scope="col">Date </th>
                                                <th scope="col">Payé</th>
                                                <th scope="col">Livré</th>
                                                @hasrole('Super Admin')
                                                    <th scope="col">Fournisseur</th>
                                                @endrole
                                                <th scope="col">Client</th>
                                                <th scope="col">Telephone</th>
                                                <th scope="col">Status</th>
                                                {{-- @hasrole('Super Admin')
                                            <th scope="col">D</th>
                                            @endrole --}}
                                                {{-- <th scope="col" style="display: none">Date de Passage</th> --}}





                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($paymentss as $payment)
                                                <tr class="text-nowrap text-center">


                                                    <td> {{ $payment->type->nom_type ?? '' }}</td>

                                                    <td>{{ number_format($payment->type->prix_c, 0, ',', ' ') ?? '' }}

                                                    <td>{{ $payment->qte }}</td>
                                                    @if ($payment->date_payement)
                                                        <td class="text-capitalize">
                                                            {{ Carbon::parse($payment->date_payement)->translatedFormat('d M Y H:i') }}
                                                        </td>
                                                    @else
                                                        <td>-</td>
                                                    @endif

                                                    @if ($payment->is_paid == 1)
                                                        <td class="text-center"><span class=" badge bg-success">payé</span>
                                                        </td>
                                                    @else
                                                        <td class="text-center"><span class=" badge bg-danger">Non
                                                                payé</span></td>
                                                    @endif
                                                    @if ($payment->is_delivery == 1)
                                                        <td class="text-center"><span class=" badge bg-success">oui</span>
                                                        </td>
                                                    @else
                                                        <td class="text-center"><span class=" badge bg-danger">Non
                                                            </span></td>
                                                    @endif
                                                    @hasrole('Super Admin')

                                                        @if ($payment->fournisseur_id)
                                                            <td class="text-capitalize">
                                                                {{ $payment->fournisseur->name }}
                                                            </td>
                                                        @else
                                                            <td> <a class=" btn-primary col-auto rounded-pill py-1 px-2"
                                                                    href="{{ route('commande.edit', $payment->id) }}">
                                                                    Choisir
                                                                </a></td>
                                                        @endif
                                                    @endrole

                                                    <td class="text-capitalize">
                                                        {{ $payment->client->name ?? '' }}
                                                    </td>
                                                    <td class="text-capitalize">
                                                        {{ $payment->phone ?? '' }}
                                                    </td>
                                                    @hasrole(['revendeur', 'producteur'])

                                                        @if ($payment->validate == 1)
                                                            <td class="text-center"><span
                                                                    class=" badge bg-success">valider</span>
                                                            </td>
                                                        @else
                                                            <td> <a class=" btn-primary col-auto rounded-pill py-1 px-2"
                                                                    href="{{ route('commande.show', $payment->id) }}">
                                                                    Valider la commande
                                                                </a></td>
                                                        @endif
                                                    @else
                                                        @if ($payment->validate == 1)
                                                            <td class="text-center"><span
                                                                    class=" badge bg-success">valider</span>
                                                            </td>
                                                        @else
                                                            <td> en attente </td>
                                                        @endif
                                                    @endrole




                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                    @if ($recherche == 1)
                                        <div class="row justify-content-center mb-3">
                                            <nav aria-label="">
                                                {{ $paymentss->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
                                            </nav>
                                        </div>
                                    @endif



                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

        </div>

    @endsection
