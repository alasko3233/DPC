@extends('dashboard.layout.app')

@section('contentdash')



<div class="container">
    <div class="card-header">
        <div class=" justify-content-center text-center">
       <h4>Liste - Documents</h4>
        </div>
        <div class=" justify-content-center text-right">
            <a class="btn btn-success col-auto rounded-pill px-4"  href="{{route('manage-document.create')}}" >
                Ajouter <i class="fas fa-plus" aria-hidden="true "></i>
            </a>
        </div>
       
    </div>

    <div class="table-responsive m-3">
        <table class="table table-bordered   table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-light text-uppercase text-center">
                <tr>
                        <th scope="col" width="230" class="text-nowrap">ID</th>
                        <th scope="col" width="230" class="text-nowrap">titre</th>
                        <th scope="col" width="230" class="text-nowrap">Modifier</th> 
                        <th scope="col" width="230" class="text-nowrap">Supprimer</th> 


                </tr>
            </thead>
              <tbody class="text-center">
                  @foreach ($documents as $document )
                  <tr>
                    <td class="text-nowrap">{{$document->id}}</td>
                    <td class="text-nowrap">{{$document->name}}</td>

                    <td class="text-nowrap">
                        <a href="{{ route('manage-document.edit', $document->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>  
                            
                     
                    </td>
                    <td class="text-nowrap">
                        <form method="POST" action="{{ route('manage-document.destroy',$document->id) }}">
                            @csrf()
                            @method('DELETE')
                         <button type="submit"  class="dropdown-item" style="color:red" >  <i class="far fa-trash-alt" aria-hidden="true"> </i></button>
                        </form>
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