@extends('layouts.master')
@section('title', 'Accueil')
@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary about pb-5">
        <div class="container pb-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7 animated fadeInLeft">
                    <div class="text-sm-center text-md-start">
                        <h4 class="text-white text-uppercase fw-bold mb-4">Bienvenue sur notre Boutique</h4>
                        <h1 class="display-1 text-white mb-4">Chair distribution</h1>
                        <p class="mb-5 fs-5 text-white">
                            Ce site est destiné à organiser les achats et ventes de poulets de chair, en précisant les
                            différentes causes de baisse ou d'augmentation des prix ainsi que les lieux géographiques. Il a
                            également pour mission de permettre aux producteurs, revendeurs et clients de se situer sur le
                            prix actuel du marché pour maintenir une bonne distribution du poulet de chair au Mali. Le site
                            facilitera la mise en relation entre producteurs, revendeurs et consommateurs finaux.
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                    class="fas fa-play-circle me-2"></i> Voir la vidéo</a>
                            <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 animated fadeInRight">
                    <div class="carousel-img" style="object-fit: cover;">
                        <img src="{{ asset('assets/img/hero.png') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5 ">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nos caractéristiques</h4>
                <h1 class="display-4 mb-4">L'assurance vous offre un meilleur avenir</h1>
                <p class="mb-0">
                    Nous nous engageons à fournir les meilleures solutions d'assurance pour garantir votre avenir. Notre
                    objectif est de vous offrir une tranquillité d'esprit grâce à nos services fiables et de haute qualité.
                </p>
            </div>
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="far fa-handshake fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Entreprise de confiance</h4>
                        <p class="mb-4">Nous sommes une entreprise de confiance, reconnue pour notre engagement envers nos
                            clients et notre intégrité.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa fa-dollar-sign fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Remboursement à tout moment</h4>
                        <p class="mb-4">Nous offrons une garantie de remboursement à tout moment pour vous assurer une
                            totale satisfaction.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa fa-bullseye fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Plans flexibles</h4>
                        <p class="mb-4">Nos plans flexibles sont conçus pour s'adapter à vos besoins spécifiques et
                            évolutifs.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa fa-headphones fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Support rapide 24/7</h4>
                        <p class="mb-4">Notre support client est disponible 24/7 pour répondre à toutes vos questions et
                            préoccupations.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    {{-- <!-- About Start -->
    <div class="container-fluid bg-light about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-primary">About Our Company</h4>
                        <h1 class="display-4 mb-4">High Range of Exploring Protection</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt debitis sint tempora. Corporis
                            consequatur illo blanditiis voluptates aperiam quos aliquam totam aliquid rem explicabo,
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae praesentium recusandae eligendi
                            modi hic
                        </p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>We can save your money.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Production or trading of good
                        </p>
                        <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Our life insurance is
                            flexible</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="img/about-1.png" class="img-fluid rounded w-100" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">129</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Insurance Policies</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">99</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Awards WON</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">556</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Skilled Agents</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">967</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Team Members</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nos Services</h4>
                <h1 class="display-4 mb-4">Nous Offrons les Meilleurs Services</h1>
                <p class="mb-0">
                    Nous nous engageons à fournir des services de haute qualité pour répondre à tous vos besoins en matière
                    d'assurance. Notre expertise et notre engagement à la satisfaction du client font de nous un choix de
                    confiance.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Assurance Vie</a>
                                <p class="mb-4">Nous offrons des polices d'assurance vie adaptées à vos besoins, vous
                                    assurant ainsi une tranquillité d'esprit pour vous et votre famille.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Assurance Santé</a>
                                <p class="mb-4">Nos polices d'assurance santé couvrent une large gamme de besoins
                                    médicaux, assurant votre bien-être et celui de vos proches.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Assurance Automobile</a>
                                <p class="mb-4">Nous proposons des polices d'assurance automobile qui offrent une
                                    protection complète pour votre véhicule.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Assurance Habitation</a>
                                <p class="mb-4">Protégez votre maison et vos biens avec nos polices d'assurance
                                    habitation complètes.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Plus de Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Notre Equipe</h4>
                {{-- <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p> --}}
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/user.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Fotigui Traore</h4>
                            {{-- <p class="mb-0">Profession</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/user.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Elom Komi Azavi</h4>
                            {{-- <p class="mb-0">Profession</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/user.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Sekou Kouyaté</h4>
                            {{-- <p class="mb-0">Profession</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/user.png') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">Maimouna Keita</h4>
                            {{-- <p class="mb-0">Profession</p> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


@endsection
