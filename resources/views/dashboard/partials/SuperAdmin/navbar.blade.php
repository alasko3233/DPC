
{{-- <li class="nav-item">
    <a class="nav-link" href="{{route('manage-new.index')}}">
              <i class="fas fa-dollar-sign text-white" aria-hidden="true"></i>
          <span class="text-white">News</span>
      </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('manage-document.index')}}">
              <i class="fas fa-dollar-sign text-white" aria-hidden="true"></i>
          <span class="text-white">Documents</span>
      </a>
</li>
 --}}



<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-cog fa-fw"></i>Configuration</a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li > <a class="dropdown-item" href="{{route('manage-projet.index')}}">Projet</a></li>
        <li > <a class="dropdown-item" href="{{route('manage-domaine.index')}}">Domaine</a></li>
        <li> <a class="dropdown-item" href="{{route('manage-membre.index')}}">membres</a></li>
        <li> <a class="dropdown-item" href="{{route('manage-partenaire.index')}}">partenaires</a></li> 
        <li> <a class="dropdown-item" href="{{route('manage-band.index')}}">bandrolls</a></li>                          
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-group fa-fw"></i> Utilisateur</a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li > <a class="dropdown-item" href="">Super Admin</a></li>
    </ul>
</li>
