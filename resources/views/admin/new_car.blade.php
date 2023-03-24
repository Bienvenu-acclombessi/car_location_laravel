@extends('admin.component.app')
@section('page_body')
<div class="page-header card">
    <div class="card-block">
        <h5 class="m-b-10">Nouvelle voiture</h5>
        <p class="text-muted m-b-10">Enregistrer une nouvelle voiture</p>
        <ul class="breadcrumb-title b-t-default p-t-10">
            <li class="breadcrumb-item">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
           <li class="breadcrumb-item"><a href="#!">Voiture</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Nouvelle voiture</a>
                    </li>
        </ul>
    </div>
</div>
<div class="page-body">
    

     <!-- Basic Form Inputs card start -->
     <div class="card">
        <div class="card-header">
<div class="card-header-right"><i
                class="icofont icofont-spinner-alt-5"></i></div>

                <div class="card-header-right">
                    <i class="icofont icofont-spinner-alt-5"></i>
                </div>

            </div>
            <div class="card-block">
                <h4 class="sub-title">Remplissez les champs</h4>
                @if($errors->any())
     
                <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                     @endforeach
                 </ul>
                </div>
             @endif
             @if(session('success_message'))
     
                <div class="alert alert-success">
                 <p>{{session('success_message')}} </p>
                </div>
             @endif
                <form method="POST" action="{{route('nouvelle')}}" enctype="multipart/form-data">
                 
                             @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nom de la voiture</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="node la voiture" name="nom" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Modele</label>
                        <div class="col-sm-10">
                            <input type="text" name="modele" placeholder="Modele de la voiture" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Marque</label>
                        <div class="col-sm-10">
                            <input type="text" name="marque" placeholder="Marque: Ex: Toyota" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Immatriculation</label>
                        <div class="col-sm-10">
                            <input type="text" name="immatriculation" placeholder="Ecrire l'immatriculation ici ...." class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Annee:</label>
                        <div class="col-sm-10">
                            <input type="text" name="annee" placeholder="Ecrire l'annee ici" class="form-control">
                        </div>
                    </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Photo:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>
                                <hr>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                            </form>
                            
                        </div>
                    </div>
                    
</div>
@endsection