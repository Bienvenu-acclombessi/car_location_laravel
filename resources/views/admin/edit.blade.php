@extends('admin.component.app')
@section('page_body')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">{{$voiture->nom}}</h5>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Voiture</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">{{$voiture->nom}}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="page-body">


        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                <div class="card-header-right">
                    <i class="icofont icofont-spinner-alt-5"></i>
                </div>

            </div>
            <div class="card-block">
         <div class="row">
            <div class="col-md-6 position-relative">
                <img src="{{Storage::url($voiture->photo)}}" alt="" style="width: 100%">
                <form method="POST" id="form_photo" action="{{route('edit.photo')}}" enctype="multipart/form-data">
                 
                    @csrf
                    <input type="hidden" name="id" value="{{$voiture->id}}">
                    <label for="photo" class="position-absolute btn btn-warning mt-4">Changer photo de la voiture</label>
                    <input type="file" required id="photo" accept="image/*" hidden onchange="readFilesAndDisplayPreview(this.files)" name="photo" class="d-none">
                                   
                    </form>
                
            </div>
            <div class="col-md-6">
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
                <form method="POST" action="{{route('edit')}}" enctype="multipart/form-data">
                 
                             @csrf
                <div class="card-block">
                    <h5 class="m-b-10">Nom:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><input type="text" placeholder="Nom la voiture" name="nom" value="{{$voiture->nom}}" class="form-control"></li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Marque:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><input type="text" placeholder="marque" name="marque" value="{{$voiture->marque}}" class="form-control"> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Modele:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><input type="text" placeholder="modele" name="modele" value="{{$voiture->modele}}" class="form-control"> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Immatriculation:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><input type="text" placeholder="Immatriculation" name="immatriculation" value="{{$voiture->immatriculation}}" class="form-control"> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Année:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><input type="text" placeholder="Annee" name="annee" value="{{$voiture->annee}}" class="form-control"> </li>
                    </ul>
                </div>
                <input type="hidden" name="id" value="{{$voiture->id}}">
    <div class="col-md-12">
        <button class="btn btn-primary mt-4 " type="submit">Mise à jour</button>
            
    </div>
                   </form>
            </div>
         </div>


            </div>
        </div>

    </div>
    <script>
        function readFilesAndDisplayPreview(file) {
                if(file!=null){
                    document.getElementById("form_photo").submit();
                }
            }
    </script>
@endsection
