<nav class="navbar navbar-expand-lg navbar-light">
    <a href="#" class="navbar-brand p-0">
        {{-- <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> --}}
        <img src="{{ asset('assets/img/logo2.png') }}" width="50" height="70" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-0 mx-lg-auto">
            <a href="{{ route('accueil') }}" class="nav-item nav-link active">Accueil</a>
            {{-- <a href="service.html" class="nav-item nav-link">Services</a>
            <a href="blog.html" class="nav-item nav-link">Blog</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Pages</span>
                </a>
                <div class="dropdown-menu">
                    <a href="feature.html" class="dropdown-item">Our Features</a>
                    <a href="team.html" class="dropdown-item">Our team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="FAQ.html" class="dropdown-item">FAQs</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            @if (auth()->check())
                @hasrole('Super Admin')
                <a href="{{ route('type_produit.index') }}" class="nav-item nav-link">Type Produit</a> @endrole

                @hasrole(['revendeur', 'client', 'producteur'])
                    <a href="{{ route('produits.index') }}" class="nav-item nav-link">Produit</a>
                @endrole
                <a href="{{ route('commande.index') }}" class="nav-item nav-link">Commande</a>
                <div class="nav-btn px-3">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">{{ auth()->user()->name }}</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                                @foreach (auth()->user()->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </a>
                            <a href="#" class="dropdown-item">Panier</a>

                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST"
                        class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">
                        @csrf
                        <input class="dropdown-item" type="submit" value="Déconnexion"
                            class="btn btn-primary rounded-pill" />
                    </form>
                    {{-- <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">
                        deconnexion
                    </a> --}}
                </div>
            @else
                <div class="nav-btn px-3">


                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">
                        Connectez -
                        vous</a>
                </div>
            @endif

        </div>
    </div>
    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
            data-wow-delay=".9s">
            <i class="fa fa-phone-alt fa-2x"></i>
            <div class="position-absolute" style="top: 7px; right: 12px;">
                <span><i class="fa fa-comment-dots text-secondary"></i></span>
            </div>
        </a>
        <div class="d-flex flex-column ms-3">
            <span>Service Client</span>
            <a href="tel:+ 223 90 90 90 90"><span class="text-dark">Free: + 223 90 90 90 90</span></a>
        </div>
    </div>
</nav>
