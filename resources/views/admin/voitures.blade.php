@extends('admin.component.app')
@section('page_body')
<div class="page-header card">
    <div class="card-block">
        <h5 class="m-b-10">Liste des voitures</h5>
        <p class="text-muted m-b-10">Liste complète des voitures avec leurs statuts</p>
        <ul class="breadcrumb-title b-t-default p-t-10">
            <li class="breadcrumb-item">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
           <li class="breadcrumb-item"><a href="#!">Voiture</a>
                    </li>
        </ul>
    </div>
</div>
<div class="page-body">
       <!-- tabs card start -->
     
        <div class="card tabs-card">
            <div class="card-block p-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><i class="fa fa-home"></i>Tous</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-key"></i>Disponinle</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><i class="fa fa-play-circle"></i>Non disponible</a>
                        <div class="slide"></div>
                    </li>
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Modèle</th>
                                    <th>Marque</th>
                                    <th>Status</th>
                                    <th>TActions</th>
                                </tr>
                                @foreach($voitures as $voiture)
                                <tr>
                                    <td><img src="{{Storage::url($voiture->photo)}}" alt="prod img"  style="height:50px"></td>
                                    <td>{{$voiture->nom}}</td>
                                    <td>{{$voiture->modele}}</td>
                                    <td>{{$voiture->marque}}</td>
                                    <td>
                                          @if($voiture->disponible==1)
                                          <span class="label label-success"> Disponible </span>
                                        @else
                                        <span class="label label-danger"> Non disponible </span>
                                        @endif
                                        </td>
                                    <td>
                                        <div>
                                            <a class="btn btn-success" href="{{url('/admin/voitures/'.$voiture->id)}}"><i class="icofont icofont-eye-alt"></i></a>
                                            <a class="btn btn-warning" href="{{url('/admin/voiture/edit/'.$voiture->id)}}"><i class="icofont icofont-ui-edit"></i></a>
                                            <a class="btn btn-danger" href="{{url('/admin/voiture/delete/'.$voiture->id)}}" ><i class="icofont icofont-ui-delete"></i></a>
                                           </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </table>
                        </div>
                        
                    </div>
                    <div class="tab-pane" id="profile3" role="tabpanel">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Modèle</th>
                                    <th>Marque</th>
                                    <th>Status</th>
                                    <th>TActions</th>
                                </tr>
                                @foreach($voitures_dispo as $voiture)
                                <tr>
                                    <td><img src="{{Storage::url($voiture->photo)}}" alt="prod img"  style="height:50px;"></td>
                                    <td>{{$voiture->nom}}</td>
                                    <td>{{$voiture->modele}}</td>
                                    <td>{{$voiture->marque}}</td>
                                    <td>
                                          @if($voiture->disponible==1)
                                          <span class="label label-success"> Disponible </span>
                                        @else
                                        <span class="label label-danger"> Non disponible </span>
                                        @endif
                                        </td>
                                    <td>#7234486</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages3" role="tabpanel">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Modèle</th>
                                    <th>Marque</th>
                                    <th>Status</th>
                                    <th>TActions</th>
                                </tr>
                                @foreach($voitures_non_dispo as $voiture)
                                <tr>
                                    <td><img src="{{Storage::url($voiture->photo)}}" alt="prod img"   style="height:50px;"></td>
                                    <td>{{$voiture->nom}}</td>
                                    <td>{{$voiture->modele}}</td>
                                    <td>{{$voiture->marque}}</td>
                                    <td>
                                          @if($voiture->disponible==1)
                                          <span class="label label-success"> Disponible </span>
                                        @else
                                        <span class="label label-danger"> Non disponible </span>
                                        @endif
                                        </td>
                                    <td>
                                        <div>
                                            <button class="btn btn-success"><i class="icofont icofont-check-circled"></i></button>
                                            <button class="btn btn-info"><i class="icofont icofont-info-square"></i></button>
                                            <button class="btn btn-warning"><i class="icofont icofont-warning-alt"></i></button>
                                            <button class="btn btn-danger"><i class="icofont icofont-eye-alt"></i></button>
                                           </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
   
    <!-- tabs card end -->
</div>
@endsection