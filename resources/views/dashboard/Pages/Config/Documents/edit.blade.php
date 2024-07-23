@extends('dashboard.layout.app')

@section('contentdash')


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="text-center">
                <div class='row justify-content-center mx-1 mt-4'>
                    <span class="col-md-12 col-xl-12 col-xll-12 col-sm-12 rounded-pill mb-2 text-uppercase smalls pe-none"> Modifier - Documents</span>
                    <hr style="height: 6px;" class="bg-success">
                </div>
            </div>

            <form action="{{route('manage-document.update',$document->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row justify-content-md-center">

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Nom</label>
                        <input class="form-control rounded border-success {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="name" id="add-input" value="{{ old('name') ?? $document->name }}" placeholder="Saisissez le nom">
                        @error('name')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Date</label>
                        <input class="form-control rounded border-success {{ $errors->has('date') ? 'is-invalid' : '' }}" type="date" name="date" id="add-input" value="{{ old('date') ?? $document->name }}" placeholder="Saisissez la date">
                        @error('date')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 my-2 my-2">
                        <label class="form-label fw-bolder text-uppercase label_color" >Changer pdf</label>
                        <small class="text-success">Changer pdf </small>
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
                                <button type="submit" class="btn btn-success col-md-6 col-xl-6 col-sm-6  col-xxl-6 rounded-pill smalls">Modifier <i data-feather='arrow-right'></i></button>
                        </div>
                    </div> 
                </div> 
            </form>

            <br>
            <div class="col-md-1"></div> 
        </div> 
    </div>
</div>

@endsection