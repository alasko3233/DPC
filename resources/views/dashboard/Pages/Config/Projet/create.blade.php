@extends('dashboard.layout.app')

@section('contentdash')


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="text-center">
                <div class='row justify-content-center mx-1 mt-4'>
                    <span class="col-md-12 col-xl-12 col-xll-12 col-sm-12 rounded-pill mb-2 text-uppercase smalls pe-none"> Ajouter - Projet</span>
                    <hr style="height: 6px;" class="bg-success">
                </div>
            </div>

            <form action="{{route('manage-projet.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-md-center">

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Nom du projet</label>
                        <input class="form-control rounded border-success {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="name" id="add-input" value="{{ old('name') ?? '' }}" placeholder="Saisissez le nom">
                        @error('name')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="phone">date debut</label>
                        <input class="form-control rounded border-success {{ $errors->has('dated') ? 'is-invalid' : '' }}" type="number" min="1990" max="2050" name="dated" id="add-input" value="{{ old('dated') ?? '' }}" placeholder="Saisissez la date de debut ">
                        @error('dated')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="phone">date fin</label>
                        <input class="form-control rounded border-success {{ $errors->has('datef') ? 'is-invalid' : '' }}"  type="number" min="1990" max="2050"  name="datef" id="add-input" value="{{ old('datef') ?? '' }}" placeholder="Saisissez la date de fin ">
                        @error('datef')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="genre">status </label>
                        <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }} border-success" name="status" id="inputPassword">
                            <option disabled selected>Selectionnez</option>
                            <option value="first">Projet realisé </option>
                            <option value="second">Projet en cour </option>
                            <option value="thrid">Projet en attente</option>

                        </select>
                            @error ('status')
                                        <span class="help-block invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>



                    <div class="col-md-12 col-md-12 col-xl-12 col-xxl-12 col-sm-12 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="email">détails</label>
                        <textarea id="summernote" name="contenu" rows="20" cols="30"  class="form-control rounded border-success {{ $errors->has('contenu') ? 'is-invalid' : '' }}"> </textarea>
                        @error('contenu')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2 my-2">
                        <label class="form-label fw-bolder text-uppercase label_color" >Joindre l'image</label>
                        <small class="text-success">Joindre image </small>
                        {{-- <label class="form-label fw-bolder text-uppercase label_color" >Joindre fichier CSV</label> --}}
                        <input type="file" class="form-control rounded border-success {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" id="contact"  required/>
                        @error('image')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror  
                    </div>


                  
                   
                  
                  
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-8 col-xl-8 col-xxl-8 col-sm-8 my-2  my-2">
                     
                        <div class="row justify-content-center mx-4 my-2">
                                <button type="submit" class="btn btn-success col-md-6 col-xl-6 col-sm-6  col-xxl-6 rounded-pill smalls">Ajouter <i data-feather='arrow-right'></i></button>
                        </div>
                    </div> 
                </div> 
            </form>

            <br>
            <div class="col-md-1"></div> 
        </div> 
    </div>
</div>

<script>
    $(document).ready(function() {
  $('#summernote').summernote({
        tabsize: 2,
        height: 500
      });
});
</script>
@endsection