@extends('layouts.master')
@section('title', 'Notres Equipes')
@section('content')

    
    
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Notres Equipes</h2>
                        </div>
                        <div class="col-12">
                            <a href="#">Accueil</a>
                            <a href="#">Notre Equipe</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->



    <!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Notre Équipe</p>
            <h3>Découvrez Notre Équipe</h3>
            <h2>Personnel Administratif</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/team-1.jpg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <h2>Directeur Général</h2>
                        <p>Permanent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/team-2.jpg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <h2>Directeur Administratif</h2>
                        <p>Permanent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/team-3.jpg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <h2>Directeur Technique</h2>
                        <p>Permanent</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/team-4.jpg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <h2>Personnel d'Appui à l’Administration</h2>
                        <p>Permanent</p>
                    </div>
                </div>
            </div> --}}
            <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
        </div>
    </div>
</div>
<!-- Team End -->
    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Personnel d'Appui à l’Administration</h2>            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/frontend/img/team-1.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        <div class="team-text">
                            <h2>10 Personnel d’Appui à l’Administration</h2>
                            {{-- <p>Permanent</p> --}}
                        </div>
                    </div>
                </div>

   
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Personnel Technique</h2>            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/frontend/img/team-1.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        <div class="team-text">
                            <h2>4 Ingénieurs</h2>
                            <p>3 permanents</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/frontend/img/team-1.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        <div class="team-text">
                            <h2>6 Techniciens Supérieurs</h2>
                            <p>3 Permanents</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/frontend/img/team-1.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        <div class="team-text">
                            <h2>30 Ingénieur Consultants et experts</h2>
                            {{-- <p>Permanent</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

                
    

    
    

@endsection