@extends('layouts.master')
@section('title', "Nos Domaines d'intervations")
@section('content')
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Domaines d'intervation</h2>
                        </div>
                        <div class="col-12">
                            <a href="#">Accueil</a>
                            <a href="#">Domaines d'intervation</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

    
<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Expertise Expert</h3>
                        <p>Des professionnels experts en géotechnique pour répondre à vos besoins avec précision.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Travail de Qualité</h3>
                        <p>Un engagement envers l'excellence pour des résultats de qualité supérieure à chaque étape.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Support 24/7</h3>
                        <p>Une assistance disponible à tout moment pour répondre à vos questions et préoccupations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->
    
                    <!-- Service Start -->
                    <div class="service">
                        <div class="container">
                            <div class="section-header text-center">
                                <p>Nos Zones d'Intervention</p>
                                <h2>Transformons ensemble votre vision en réalité</h2>
                                            </div>
                            <div class="row justify-content-center">
                @foreach ($domaines as $domaine )

                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img class=" img-fluid" src="{{asset('assets/geocom/img/domaine/'.$domaine->image_p)}}"   alt="Image">
                                            <div class="service-overlay">
                                                <p>
                                                    {{ $domaine->section}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="service-text">
                                            <h3>{{$domaine->name}}</h3>
                                            <a href="{{route('domaine.show',$domaine)}}" class="btn">+</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
          
                                         
                            </div>
                        </div>
                    </div>
                    <!-- Service End -->
        
 
                <!-- Service Start -->
                {{-- <div class="service">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Nos Zones d'Intervention</p>
                            <h2>Transformons ensemble votre vision en réalité</h2>
                                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/frontend/img/service-1.jpg')}}" alt="Image">
                                        <div class="service-overlay">
                                            <p>
                                                Dans le secteur du génie civil et de la géotechnique, GEOCOM capitalise sur un savoir-faire et une expérience reconnus, offrant une gamme étendue de prestations comprenant les essais, les analyses, les études, les contrôles, les expertises et l'assistance technique.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="service-text">
                                        <h3>Génie Civil et Géotechnique</h3>
                                        <a class="btn" href="{{asset('assets/frontend/img/service-1.jpg')}}" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/frontend/img/service-2.jpg')}}" alt="Image">
                                        <div class="service-overlay">
                                            <p>
                        GEOCOM valorise le patrimoine urbain et rural en intégrant des aspects environnementaux aux techniques modernes de conception et d'efficacité, intervenant notamment dans la voirie, les drainages, les bâtiments, les aménagements hydro-agricoles et bien d'autres.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="service-text">
                    <h3>Infrastructures Urbaines et Rurales</h3>
                                        <a class="btn" href="{{asset('assets/frontend/img/service-2.jpg')}}" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/frontend/img/service-3.jpg')}}" alt="Image">
                                        <div class="service-overlay">
                                            <p>
                        GEOCOM assure la réalisation complète des projets d'infrastructure de transport et de communication, de la phase d'étude de faisabilité jusqu'à la gestion des infrastructures en passant par la conception et la mise en œuvre.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="service-text">
                    <h3>Transport et Communication</h3>
                                        <a class="btn" href="{{asset('assets/frontend/img/service-3.jpg')}}" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/frontend/img/service-4.jpg')}}" alt="Image">
                                        <div class="service-overlay">
                                            <p>
                        GEOCOM se concentre sur le développement du secteur énergétique tout en mettant l'accent sur la gestion et la protection de l'environnement. Nous développons des solutions énergétiques innovantes et respectueuses de l'environnement.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="service-text">
                    <h3>Énergie et Environnement</h3>
                                        <a class="btn" href="{{asset('assets/frontend/img/service-4.jpg')}}" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="{{asset('assets/frontend/img/service-5.jpg')}}" alt="Image">
                                        <div class="service-overlay">
                                            <p>
                        GEOCOM participe à la conception et à la mise en œuvre des infrastructures sanitaires, contribuant ainsi à l'amélioration de la santé des populations et au développement durable.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="service-text">
                    <h3>Santé</h3>
                                        <a class="btn" href="{{asset('assets/frontend/img/service-5.jpg')}}" data-lightbox="service">+</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}
                <!-- Service End -->
    
    

    
    

    
<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Questions Fréquemment Posées</p>
            <h2>Vous Pouvez Demander</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                Quels sont les domaines d'intervention de GEOCOM ?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                GEOCOM intervient dans divers domaines, notamment l'ingénierie du développement, l'hydraulique, le génie civil, l'environnement, l'énergie, l'économie, l'assainissement, la santé et les TIC.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                Comment puis-je contacter GEOCOM pour une consultation ?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Vous pouvez nous contacter par téléphone au +123456789 ou par e-mail à info@geocom.com. Vous pouvez également remplir le formulaire de contact sur notre site web.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                Quelle est votre expérience dans le domaine du génie civil ?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                GEOCOM possède une vaste expérience dans le domaine du génie civil, accumulée grâce à notre participation à de nombreux projets de construction et de développement à travers le pays.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion-2">
                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                Quels types de projets avez-vous réalisés auparavant ?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                GEOCOM a réalisé une variété de projets, allant de la construction d'infrastructures routières et hydrauliques à la conception de bâtiments résidentiels et commerciaux.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                Quels sont vos délais de livraison typiques pour les projets ?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Les délais de livraison varient en fonction de la taille et de la complexité du projet. Nous travaillons avec nos clients pour établir des calendriers réalistes et respectons toujours les délais convenus.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                Proposez-vous des services de consultation en ligne ?
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Oui, nous proposons des services de consultation en ligne pour répondre aux questions de nos clients et discuter de leurs besoins en matière de projet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

    
  
@endsection