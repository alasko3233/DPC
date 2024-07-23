@extends('dashboard.layout.app')

@section('contentdash')



<div class="container">

    
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">

            <div class="col-md-3 text-start col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                <label id="hide-label" class="form-label fw-bolder" for="prenom">Nom</label>
                <input class="form-control rounded border-success " type="text" name="nom_ville" id="hide-input" value="{{ old('nom_ville') ?? $ville->nom_ville }}" placeholder="Saisissez votre prénom">
                            </div>
            <div class="col-md-3 text-start col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2" id="nom">
                <label id="hide-label2" class="form-label fw-bolder" for="nom">Prenom </label>
                <input class="form-control rounded border-success " type="text" name="nom_pays" id="hide-input2" value="{{ old('pays_id') ?? $ville->pays->nom_pays }}" placeholder="Saisissez votre nom">
             </div>
             <div class="col-md-3 text-start col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2" id="nom">
                <label id="hide-label2" class="form-label fw-bolder" for="nom">adresse </label>
                <input class="form-control rounded border-success " type="text" name="nom_pays" id="hide-input2" value="{{ old('pays_id') ?? $ville->pays->nom_pays }}" placeholder="Saisissez votre nom">
            </div>
            <div class="col-md-3 text-start col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2" id="nom">
                <label id="hide-label2" class="form-label fw-bolder" for="nom">mot de passe </label>
                <input class="form-control rounded border-success " type="text" name="nom_pays" id="hide-input2" value="{{ old('pays_id') ?? $ville->pays->nom_pays }}" placeholder="Saisissez votre nom">
            </div>

        </div>
                          


    
       
   
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-8 col-xl-8 col-xxl-8 col-sm-8 my-2  my-2">
             
                <div class="row justify-content-center mx-4 my-2">
                        <button type="submit" class="btn btn-success col-md-6 col-xl-6 col-sm-6  col-xxl-6 rounded-pill smalls">editer <i data-feather='arrow-right'></i></button>
                </div>
            </div> 
        </div> 
       
       
   
    </form>



</div>

@endsection

