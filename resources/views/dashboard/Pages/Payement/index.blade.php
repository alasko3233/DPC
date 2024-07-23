@extends('dashboard.layout.app')
@section('title', 'liste des messages')
@section('contentdash')


<style>
    .btntotal {
        background-color:#1380c0;
    }
</style>
<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <!-- Advance search form here -->
                <div class="card mb-2" style="margin-bottom: -45px;;">
                    <div class="card-body">
                        <span>Recherche avancée</span>
                        <button type="button" id="showBtnId" class="btn btn-outline-success pull-right btnShow rounded-pill" onclick="openForm()">
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-danger hidden pull-right rounded-pill" id="showBtnHidden" style="display: none;" onclick="closeForm()"> <i class="fa fa-minus" aria-hidden="true"></i></button>
                    </div>
                    <div class="card-body" id="showFormId">
                        <form action="" method="post" role="search">
                            @csrf
                            <div class="row justify-content-md-center">
                                <div class="col-md-8 text-center">
                                    <label class="mb-1 h4" for="inputEmailAddress">Rechercher</label>
                                    <input class="form-control py-4" name="identifiant" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Saisissez le numero du destinateur " />
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-3"> <br>
                                    <button type="reset" class="btn btn-danger hidden rounded-pill px-4"><i class="fa fa-undo" aria-hidden="true"></i> Effacer</button>

                                    <button type="submit" class="btn btn-success pull-right rounded-pill px-4" name="valider"><i class="fas fa-search" aria-hidden="true"></i> Recherche</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                @if( session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <strong>Le numero nest pas dans la liste</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


                {{-- <div class="card mb-2" style="margin-bottom: -45px;;">
                    <div class="card-body">
                        <span>Recherche avancée</span>
                        <button type="button" id="showBtnId" class="btn btn-outline-success pull-right btnShow rounded-pill" onclick="openForm()">
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-danger hidden pull-right rounded-pill" id="showBtnHidden" style="display: none;" onclick="closeForm()"> <i class="fa fa-minus" aria-hidden="true"></i></button>
                    </div>
                    <div class="card-body" id="showFormId">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row justify-content-md-center">
                                <div class="col-md-8 text-center">
                                    <label class="mb-1" for="inputEmailAddress">Rechercher</label>
                                    <input class="form-control py-4" name="identifiant" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Saisissez l'identifiant " />
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-3"> <br>
                                    <button type="reset" class="btn btn-danger hidden rounded-pill px-4"><i class="fa fa-undo" aria-hidden="true"></i> Effacer</button>

                                    <button type="submit" class="btn btn-success pull-right rounded-pill px-4" name="valider"><i class="fas fa-search" aria-hidden="true"></i> Recherche</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <!-- end here-->
                <div class="row mt-2">
                    <div class="col-md-12 mt-3">
                        <h3 class="text-center text-success font-weight-bold text-uppercase">Liste des Paiement </h3>
                        <hr style="height: 6px;" class="bg-success">
                    </div>
                    
                </div>


           
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="pull-left">
                                <div  name="total" class="btn btn-primary py-1 px-3 smalls mr-2">Total:</div>
                                <div  name="M"  class="btn btn-success py-1 px-3 smalls mr-2" value="M.">Auto / Moto:</div>
                                <div  name="Mme" class="btn btn-warning py-1 px-3 smalls mr-2" value="Mme">Camion: </div>
                                <div name="frais"  class="btn btn-primary py-1 px-3 smalls mr-2" disabled>Tricycle:</div>
                            </div>
                            </div>

                        </div>
                       
<div class=" justify-content-center">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  class="table table-bordered table-responsive-sm  table-hover">
                                    <thead class="thead-light text-uppercase text-nowrap text-center">
                                        <tr>
                                            <th scope="col" >Engin </th>
                                            <th scope="col" >Immatriculation</th>
                                            <th scope="col" >N° Recu</th>
                                            <th scope="col" >Peage</th>
                                            <th scope="col" >Téléphone</th>
                                            <th scope="col" >Montant</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment )
                                
                                            <tr class="text-center">
                                        
                                                <td> {{$payment->typeEngin->nom_type}}</td>
                                                <td>{{$payment->numero_engin}}</td>
                                                <td>{{$payment->trxnid}}</td>
                                                <td>{{$payment->peage->nom_peage}}</td>
                                                <td>{{$payment->telephone}}</td>
                                                <td>{{$payment->typeEngin->montant}}</td>


                                            </tr>
                                     
                                            @endforeach            
                                  
                                 
                                    </tbody>
                                </table>
                                <div class="row justify-content-center mb-3">
                                    <nav aria-label="">
                                        {{-- {{ $diplomes->links('vendor.pagination.bootstrap-4') }} --}}
                                    </nav>
                                </div>
                                
                             

                            </div>
                        </div>

                       
                    </div>
              
                        


                      


                    </div>
          
            </div>
        </main>

        @endsection

        <script>
            function exportTasks(_this) {
                let _url = $(_this).data('href');
                window.location.href = _url;
            }
            function openForm() {
    var formId = document.getElementById("showFormId");
    var btnId = document.getElementById("showBtnId");
    var btnIdHidden = document.getElementById("showBtnHidden");
    formId.style.display = "block";
    btnId.style.display = "none";
    btnIdHidden.style.display = "block";
}


function closeForm() {
    var formId = document.getElementById("showFormId");
    var btnId = document.getElementById("showBtnId");
    var btnIdHidden = document.getElementById("showBtnHidden");
    formId.style.display = "none";
    btnId.style.display = "block";
    btnIdHidden.style.display = "none";
}
        </script>