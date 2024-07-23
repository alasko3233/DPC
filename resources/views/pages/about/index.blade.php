@extends('layouts.master')
@section('title', 'A propos de nous')
@section('content')
           <style>

.valeur {
    position: relative;
    margin-bottom: 45px;
}
.valeur .col-md-12 {
    background: #030f27;
}

.valeur .col-md-12:nth-child(2n) {
    color: #030f27;
    background: #5784ba;
}
.valeur .valeur-item {
    min-height: 250px;
    height: 280px;
    max-height: 280px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.valeur .valeur-text {
    padding-left: 10px;
}

.valeur .valeur-text h3 {
    margin: 0 0 10px 0;
    color: #5784ba;
    font-size: 20px;
    font-weight: 600;
}

.valeur .valeur-text p {
    margin: 0;
    color: #5784ba;
    font-size: 16px;
    font-weight: 400;
}
.valeur .col-md-12:nth-child(2n) [class^="flaticon-"]::before,
.valeur .col-md-12:nth-child(2n) h3,
.valeur .col-md-12:nth-child(2n) p {
    color: #030f27;
}
.valeur .valeur-icon {
    position: relative;
    width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.valeur .valeur-icon::before {
    position: absolute;
    content: "";
    width: 80px;
    height: 80px;
    top: -20px;
    left: -10px;
    border: 2px dotted #ffffff;
    border-radius: 60px;
    z-index: 1;
}

.valeur .valeur-icon::after {
    position: absolute;
    content: "";
    width: 79px;
    height: 79px;
    top: -18px;
    left: -9px;
    background: #030f27;
    border-radius: 60px;
    z-index: 2;
}

.valeur .col-md-12:nth-child(2n) .valeur-icon::after {
    background: #5784ba;
}

.valeur .valeur-icon [class^="flaticon-"]::before {
    position: relative;
    margin: 0;
    color: #5784ba;
    font-size: 60px;
    line-height: 60px;
    z-index: 3;
}

           </style>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>A propos de nous</h2>
                        </div>
                        <div class="col-12">
                            <a href="#">Accueil</a>
                            <a href="#">A propos de nous</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
<!-- Mot du Directeur Start -->

<div class="about wow fadeInUp mb-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Mot du Directeur</p>
                    <h2>Une Parole de Sagesse</h2>
                                </div>
                <div class="mot-du-directeur-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{asset('assets/frontend/img/team-1.jpg')}}" alt="Image">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Mot du Directeur End -->


<!-- About Start -->
<div class="about wow fadeInUp mb-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{asset('assets/img/taff/bgabout.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Explorez l'univers de GEOCOM</p>
                    <h2>7 ans de réussites et d'innovations</h2>
                </div>
                <div class="about-text">
                    <p>
                        Depuis notre création en avril 2018, GEOCOM a été un moteur de progrès socio-économique au Mali et dans de nombreux pays africains. Notre équipe exceptionnelle d'ingénieurs compétents et de consultants polyvalents a été au cœur de notre succès.
                    </p>
                    <p>
                        Chez GEOCOM, nous croyons en l'excellence et en l'engagement envers nos clients. Notre histoire est façonnée par notre dévouement à fournir des solutions innovantes, soutenues par un service client exceptionnel et une approche proactive pour relever les défis les plus complexes.
                    </p>
                    <a class="btn" href="#">Découvrez notre expertise</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
    
    <!-- Valeurs Start -->
<div class=" valeur mt-5">
    <div class="container">
        <div class="section-header text-center">
            <h2 >Nos valeurs</h2>
            {{-- <h2>Vous Pouvez Demander</h2> --}}
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 ">
                <div class="valeur-item">
                    <div class="valeur-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="valeur-text">
                        <h3 class="">COMPETENCES</h3>
                        <p>Nos équipes d’ingénieurs et d’experts développent leurs compétences grâce aux formations organisées, ainsi qu’à leur expertise sur les projets réalisés par le laboratoire</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="valeur-item">
                    <div class="valeur-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="valeur-text">
                        <h3 >ASSISTANCE ET SATISFACTION DES CLIENTS</h3>
                        <p>L’accompagnement de nos clients tout au long du projet est l’un de nos atouts. Nous assurons un suivi minutieux depuis l’étude de faisabilité jusqu’à l’achèvement des travaux</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="valeur-item">
                    <div class="valeur-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="valeur-text">
                        <h3 class=" ">FIABILITE</h3>
                        <p>L’aptitude de GEOCOM à accomplir une fonction requise dans des conditions données pour une période de temps donnée est l’une de nos valeurs..</p>
                    </div>
                </div>
            </div>


        </div>  
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-4 col-md-12">
                <div class="valeur-item">
                    <div class="valeur-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="valeur-text">
                        <h3 class="">BON RAPPORT QUALITE/PRIX</h3>
                        <p>Engager nos équipes afin de mieux mener leurs missions d’études, d’assistance et de suivi, tout en restant compétitifs sur le marché en matière de prix.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="valeur-item">
                    <div class="valeur-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="valeur-text">
                        <h3>RESPECT DES DELAIS</h3>
                        <p>Nous offrons un meilleur service tout en assurant le respect des délais convenus avec les avec les maitres d’ouvrages/donneurs d’ordre.</p>
                    </div>
                </div>
            </div>

        </div>  
      </div>
</div>
<!-- Valeur End -->
 
<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Faqs</p>
            <h2>Questions Fréquemment Posées</h2>
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