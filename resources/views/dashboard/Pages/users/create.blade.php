@extends('dashboard.layout.app')

@section('contentdash')


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="text-center">
                <div class='row justify-content-center mx-1 mt-4'>
                    <span class="col-md-12 col-xl-12 col-xll-12 col-sm-12 rounded-pill mb-2 text-uppercase smalls pe-none"> Ajouter -  Admin</span>
                    <hr style="height: 6px;" class="bg-success">
                </div>
            </div>

            <form action="{{route('manage-users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-md-center">
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="genre">Civilité </label>
                        <select class="form-control {{ $errors->has('genre') ? 'is-invalid' : '' }} border-success" name="genre" id="inputPassword">
                            <option disabled selected>Selectionnez</option>
                            <option value="male">M.</option>
                            <option value="female">Mme</option>
                        </select>
                            @error ('genre')
                                        <span class="help-block invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="name">Nom</label>
                        <input class="form-control rounded border-success {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="name" id="add-input" value="{{ old('name') ?? '' }}" placeholder="Saisissez le nom">
                        @error('name')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="phone">Numéro de téléphone</label>
                        <input class="form-control rounded border-success {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="add-input" value="{{ old('phone') ?? '' }}" placeholder="Saisissez le numéro de téléphone ">
                        @error('phone')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2" id="add-cls">
                        <label id="add-label" class="form-label fw-bolder" for="email">E - mail </label>
                        <input class="form-control rounded border-success {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="add-input" value="{{ old('email') ?? '' }}" placeholder="Saisissez l' e-mail">
                        @error('email')
                            <div class="help-block invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 text-start col-md-3 col-xl-3 col-xxl-3 col-sm-6 my-2 my-2" >
                        <label class="text-center fw-bolder pb-2" for="degreeCode">Role</label>
                            <select class="form-select rounded border-success  " name="role" id=""  required="">
                                <option value="0"  >Sélectionnez</option>
                                
                                                           @foreach ( $Roles as $role )
                                                               <option value="{{$role->name}}"> {{$role->name}}</option>
                                                           @endforeach
                                                            
                                                    </select>
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

@endsection