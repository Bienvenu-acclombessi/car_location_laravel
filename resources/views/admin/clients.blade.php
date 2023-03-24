@extends('admin.component.app')
@section('page_body')
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Mes clients</h5>
            <p class="text-muted m-b-10">Visualiser tous les clients</p>
            <ul class="breadcrumb-title b-t-default p-t-10">
                <li class="breadcrumb-item">
                    <a href="index.html"> <i class="fa fa-home"></i> </a>
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
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->nom}}</td>
                            <td>{{$user->prenom}}</td>
                            <td>{{$user->email}}</td>

                            <td>
                                  @if($user->role==1)
                                  <span class="label label-success"> Admin </span>
                                @else
                                <span class="label label-danger"> Client </span>
                                @endif
                                </td>
                            <td>#7234486</td>
                        </tr>
                        @endforeach
                        
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
