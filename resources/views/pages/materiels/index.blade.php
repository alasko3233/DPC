@extends('layouts.master')
@section('title', 'Ressources Materiels')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Ressources Materiels </h2>
                        </div>
                        <div class="col-12">
                            <a href="#">Accueil</a>
                            <a href="#">Materiels</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        {{-- <p>Notre Équipe</p> --}}
                        <h3>LES MATERIELS INFORMATIQUES</h3>
                        {{-- <h2>Personnel Administratif</h2> --}}
                    </div>
                    <div class="row justify-content-center">

                        <div class="col-lg-10 col-md-6">
             
                            <div >
                                <p class=" h4 my-2">16 Ordinateurs de table et portatif</p>
                                <p class=" h4 my-2">5 Imprimantes laser noir</p>
                                <p class=" h4 my-2">5 Imprimantes couleur Format A3/A4</p>
                                <p class=" h4 my-2">Un (1) traceur grand format AO Couleur sur réseau couplé à un scanner numérique (format AO)</p>
                                <p class=" h4 my-2">Cinq (5) scanners de format A4 </p>
                                <p class=" h4 my-2">2 Copieurs A3/A4 ;</p>
                                <p class=" h4 my-2">Serveur de Sauvegarde de Documents</p>
                                <p class=" h4 my-2">Réseau de transmission et transfert des données avec interconnexion entre les différents périphériques</p>


                            </div>
                        </div>
            
                        <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
                    </div>
                </div>
            </div>
       <!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            {{-- <p>Notre Équipe</p> --}}
            <h3>LOGICIELS TECHNIQUES DE CONCEPTION ET DE MODELISATION / CAO</h3>
            {{-- <h2>Personnel Administratif</h2> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/autocad.png')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>Auto cad 2D ET 3D</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/adobeill.jpeg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>ADOBE Illustrator </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/adobephoto.jpeg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>ADOBE Photoshop </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/covadis.jpeg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>Covadis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/ALIZE.png')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>ALIZE LCPC</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/Geofond.jpeg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>GEOFOND</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/GeoStudio.jpeg')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>GEOSTUDIO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/frontend/img/CYPE.png')}}" alt="Image de l'Équipe">
                    </div>
                    <div class="team-text">
                        <p>CYPE</p>
                    </div>
                </div>
            </div>


            <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
        </div>
    </div>
</div>
<!-- Team End -->
  
       <!-- Team Start -->
       <div class="team">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p>Notre Équipe</p> --}}
                <h3>SYSTEME	D’INFORMATIONS GEOGRAPHIQUES</h3>
                {{-- <h2>Personnel Administratif</h2> --}}
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/frontend/img/ArcView.jpeg')}}" alt="Image de l'Équipe">
                        </div>
                        <div class="team-text">
                            <p>Arcview</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/frontend/img/ArcGIS.png')}}" alt="Image de l'Équipe">
                        </div>
                        <div class="team-text">
                            <p>ArcGIS </p>
                        </div>
                    </div>
                </div>

                <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
            </div>
        </div>
    </div>
    <!-- Team End -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p>Notre Équipe</p> --}}
                <h3>Moyens de déplacement</h3>
                {{-- <h2>Personnel Administratif</h2> --}}
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-6">
     
                    <div >
                        <p class=" h4 my-2">8 Véhicules de Chantier 4x4</p>
                        <p class=" h4 my-2">3 Véhicules de ville pour les courses administratives</p>
                        <p class=" h4 my-2">Des cyclos moteurs Tout Terrain</p>
                        <p class=" h4 my-2">Voitures de Terrain en Location </p>

                    </div>
                </div>
    
                <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                {{-- <p>Notre Équipe</p> --}}
                <h3>Equipements Technique</h3>
                {{-- <h2>Personnel Administratif</h2> --}}
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-6">
     
                    <div >
                        <p class=" h4 my-2">Station Totale numérisée pour les levés topographique </p>
                        <p class=" h4 my-2"> Théodolite, Niveaux Topographique </p>
                        <p class=" h4 my-2"> GPS de précision </p>
                        <p class=" h4 my-2"> Des appareils de mesures de chantier (comme par exemple mesure de la qualité du béton) </p>
                        <p class=" h4 my-2"> Appareils Photo numérique </p>

                    </div>
                </div>
    
                <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
            </div>
            {{-- <div class="row justify-content-center">

                <div class="col-lg-10 col-md-6">
     
                    <img src="{{asset('assets/img/taff/tableau.png')}}" alt="" srcset="">
                </div>
    
                <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
            </div> --}}
        </div>
    </div>
    <div class="team">
        <div class="">
            <div class="section-header text-center">
                {{-- <p>Notre Équipe</p> --}}
                <h3>Materiels de labortoire GeoTechnique et de Sondage</h3>
                {{-- <h2>Personnel Administratif</h2> --}}
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class=" img-fluid">
                            <img src="{{asset('assets/img/taff/table.png')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel1.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel2m.png')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel3.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
 
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel6.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel7.jpg')}}" height="400" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel8.png')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel4.png')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel5.png')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/img/taff/materiel9.jpg')}}" alt="Image de l'Équipe">
                        </div>
                        {{-- <div class="team-text">
                            <p>Arcview</p>
                        </div> --}}
                    </div>
                </div>

                <!-- Ajoutez les autres membres de l'équipe ici selon le même format -->
            </div>
        </div>
    </div>
@endsection