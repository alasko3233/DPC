<style type="text/css">
    .mobileShow {display: none;}
  
  /* Smartphone Portrait and Landscape */
  @media only screen
    and (min-device-width : 200px)
    and (max-device-width : 989px){ 
      .mobileShow {display:block;}
  }
    .mobileHide { display:; }

        /* Smartphone Portrait and Landscape */
        @media only screen
        and (min-device-width : 200px)
        and (max-device-width : 990px){
        .mobileHide { display: none;}
        }
</style>

<div class="navbar-expand-lg navbar-dark mobileHide bg-dark">
            <div id="header-left">
                <!-- Navbar Brand-->
        <a class="navbar-brand " href="{{route('dashboard.index')}}">
            <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="Omafes" height="60px" width="100px">

        
        </a>
        <!-- Sidebar Toggle-->
    
        </div>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end  ">


        <!-- Navbar Search-->
        <!-- Navbar-->

                <ul class="navbar-nav ms-auto ms-md-0 me-lg-4">
                    @include('dashboard.partials.SuperAdmin.navbar')


            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user fa-fw"></i>
                            {{ Auth::user()->name}}
                            </a>
                        <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdown"> Super Admin
                            <li><hr class="dropdown-divider" /></li>
                            <li class="dropdown-item">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <input class="dropdown-item" type="submit" value="Déconnexion" />
                                  </form></li> 
                            <li class="dropdown-item">
                                <a href="{{route('change-password.index')}}" class="dropdown-item">Mot de Passe</a>
                            </li> 
                                

                         </ul>
                     </ul>
                    </li>
                </ul>

    
    </nav>
  

    
</div>
<div class="navbar-expand-md mobileShow navbar-dark bg-dark">
    <div class="row">
    <div class="text-start" id="header-left">
        <!-- Navbar Brand-->
<a class="navbar-brand ps-2" href="{{route('dashboard.index')}}">
    <img style="float:left;" class="img-fluid ml-4" src="{{ asset('assets/omafes/img/logo.png') }}" alt="Omafes" height="40px" width="40px">

    <p  style=" float:right; margin-top:5px;">Omafes | <span class="text-light"> {{ Auth::user()->name}}</span></p>  

</a>
<!-- Sidebar Toggle-->

</div>
<div>
<nav class=" navbar navbar-expand navbar-dark bg-dark d-flex justify-content-center  ">


<!-- Navbar Search-->
<!-- Navbar-->

        <ul class="navbar-nav ms-auto ms-md-0  me-lg-4">
            @include('dashboard.partials.SuperAdmin.navbar')


    
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                    {{ Auth::user()->name}}
                    </a>
                <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdown"> Super Admin
                  </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li class="dropdown-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <input class="dropdown-item" type="submit" value="Déconnexion" />
                          </form></li> 
                    <li class="dropdown-item">
                        <a href="{{route('change-password.index')}}" class="dropdown-item">Mot de Passe</a>
                    </li> 
                        

                 </ul>
             </ul>
            </li>
        </ul>


</nav>
</div>
</div>



</div>

