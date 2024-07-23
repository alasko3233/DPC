@extends('layouts.master')
@section('title', 'Projet')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2> Projets</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Projets</a>
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
                            <div class="col-lg-8">
                                <div class="single-content wow fadeInUp">
                                    <img class=" img-fluid" src="{{ asset('assets/geocom/img/projet/'.$projet->image_p) }}" />
                                    <p class="h3 fw-bold">{{ $projet->name }}</p>
<div>
    {!! $projet->contenu !!}
</div>
                                </div>

  
 
    


                            </div>
    
                            <div class="col-lg-4">
                                <div class="sidebar">

    
                                    <div class="sidebar-widget wow fadeInUp">
                                        <h2 class="widget-title">Autres Projets</h2>
                                        <div class="recent-post">
                @foreach ($projets as $projet )

                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="{{ asset('assets/geocom/img/projet/'.$projet->image_p) }}" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="{{route('projet.show',$projet)}}"> {{ substr($projet->name, 0, 200) }}... </a>
                                       
                                                </div>
                                            </div>
                                            @endforeach
   
                                        </div>
                                    </div>
    




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Post End-->   
    



    
    
    
   
   
 

@endsection