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
            <div class="col-md-6">
                <img src="{{Storage::url($voiture->photo)}}" alt="" style="width: 100%">
            </div>
            <div class="col-md-6">
                <div class="card-block">
                    <h5 class="m-b-10">Nom:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><a href="#!">{{$voiture->nom}}</a> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Marque:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><a href="#!">{{$voiture->marque}}</a> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Modele:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><a href="#!">{{$voiture->modele}}</a> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Immatriculation:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><a href="#!">{{$voiture->immatriculation}}</a> </li>
                    </ul>
                </div>
                <div class="card-block">
                    <h5 class="m-b-10">Année:</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item"><a href="#!">{{$voiture->annee}}</a> </li>
                    </ul>
                </div>
            </div>
         </div>


            </div>
        </div>

    </div>
@endsection
