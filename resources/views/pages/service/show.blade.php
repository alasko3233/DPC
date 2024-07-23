@extends('layouts.master')
@section('title', 'Projet')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2> Domaine</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Domaine</a>
                        </div>
                        <div class="col-3">
                            <a href="{{ url()->previous() }}">retour</a>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Page Header End -->

                <!-- Single Post Start-->
                <div class="single">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="single-content wow fadeInUp">
                                    <img src="{{ asset('assets/geocom/img/domaine/'.$domaine->image_p) }}" height="500" width="100" />
                                    <p class="h3 fw-bold">{{ $domaine->name }}</p>
<div>
    {!! $domaine->contenu !!}
</div>
                                </div>

  
 
    


                            </div>
    
 
                        </div>
                    </div>
                </div>
                <!-- Single Post End-->   
    



    
    
    
   
   
 

@endsection