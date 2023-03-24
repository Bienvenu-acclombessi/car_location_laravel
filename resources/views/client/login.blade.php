@extends('client.component.app')
@section('content')
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h1 class="b-title-page">Se Connecter</h1>
            <div class="ui-decor bg-primary"></div>
          </div>
       <!--    <div class="col-md-auto"><a class="b-title-page__btn bg-primary" href="#">Smarter Way to Buy or Sell Cars</a></div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- end .b-title-page-->
  
  <div class="container text-center">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html"><i class="ic text-primary fas fa-home"></i> Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Se Connecter</li>
      </ol>
    </nav>
  </div>
  <!-- end breadcrumb-->
  
  <div class="l-main-content">
    <div class="container">

        
        
        
        <div class="row" style="margin: 0 auto; ">
          <!-- <div class="col-md-6">
            <div class="map" id="map"></div>
          </div> -->

          <div class="col-md-4">  </div>
          <div class="col-md-4">
             <div></div>
            <section class="section-form-contacts">
              <h2 class="ui-title-inner">Se<span class="text-primary"> Connecter</span></h2>
              <p></p>
              <div id="success"></div>
              <form class="b-form-contacts ui-form" id="contactForm" action="{{route('user.login')}}" method="post">
                @if($errors->any())
     
                                <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                     @endforeach
                                 </ul>
                                </div>
                             @endif
                             @csrf
                <div class="form-group">
                  <input class="form-control" id="user-name" type="email" name="email" placeholder="Nom d'Utilisateur " required="required"/>
                </div>
                <div class="form-group">
                  <input class="form-control" id="user-email" type="password" name="password" required="required" placeholder="Mot de passe"/>
                </div>
               


                <button class="btn btn-primary col-md-12" type="submit" name="connecter">Se connecter</button> <br><br> <p>Vous n'avez pas de compte ? <a href="/register">S'inscrire</a> </p>
              </form>
            </section>
          </div>
            <div class="col-md-4">  </div>
        </div>
        
        
        
    </div>
  </div>
  
  @endsection