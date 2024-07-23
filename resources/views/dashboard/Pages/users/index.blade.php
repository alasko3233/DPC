@extends('dashboard.layout.app')

@section('contentdash')



<div class="container">
    <div class="card-header">
        <div class=" justify-content-center text-center">
       <h4>Liste des Utilisateurs</h4>
        </div>
        <div class=" justify-content-center text-right">
            <a class="btn btn-success col-auto rounded-pill px-4"  href="{{route('manage-users.create')}}" >
                Ajouter <i class="fas fa-plus" aria-hidden="true "></i>
            </a>
        </div>
       
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered   table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light text-uppercase text-center">
                <tr>
                        <th scope="col" width="230" class="text-nowrap">ID</th>
                        <th scope="col" width="230" class="text-nowrap">Nom</th>
                        <th scope="col" width="230" class="text-nowrap">Email</th>
                        <th scope="col" width="230" class="text-nowrap">Role</th>
                        <th scope="col" width="230" class="text-nowrap">Action</th> 

                </tr>
            </thead>
              <tbody class="text-center">
                  @foreach ($users as $user )
                  <tr>
                    <td class="text-nowrap">{{$user->id}}</td>
                    <td class="text-nowrap">{{$user->name}}</td>
                    <td class="text-nowrap">{{$user->email}}</td>
                    <td class="text-nowrap"></td>

                    <td class="text-nowrap">
                        <a href=""><i class="fa-solid fa-pen-to-square"></i></a>  
                        <a href=""><i class="fa-solid fa-trash "></i></a>  
                    </td>
                    </tr>   
                  @endforeach     
            <tbody>
        </table>
        <div class="d-flex float-end ">
            <nav aria-label="Page navigation example">
                <ul class="pagination" style="text-decoration: none">
                {{-- {!! $diplomes->links() !!} --}}
                </ul>
            </nav>
        </div>
    </div>  

</div>

@endsection