@extends('client.component.app')
@section('content')
    <div class="section-title-page area-bg area-bg_dark area-bg_op_60">



        <div class="area-bg__inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md">



                        <h1 class="b-title-page">Créaction d'un compte</h1>


                        <div class="ui-decor bg-primary"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end .b-title-page-->

    <div class="container text-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html"><i class="ic text-primary fas fa-home"></i> Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Compte EUROPE AUTO</li>
            </ol>
        </nav>
    </div>
    <!-- end breadcrumb-->







    <div class="l-main-content">
        <div class="container">
            <section class="b-goods-f">
                




                <div class="row">
                    <div class="col-lg-8">

                        <div></div>

                        <div class="widget section-sidebar bg-gray">
                            <h3 class="widget-title bg-dark row justify-content-between align-items-center no-gutters"><i
                                    class="ic flaticon-car-2 bg-primary col-auto"></i><span
                                    class="widget-title__inner col">Créer un Compte chez nous</span></h3>
                            <div class="widget-content">





                                <div class="widget-inner">
                                    <form class="md-float-material" action="{{route('user.register')}}" method="POST">
                                        
                                        <div class="">
                                            
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
                                                <input type="text" class="form-control" name="nom" placeholder="Nom">
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Your Email Address">
                                                <span class="md-line"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Choose Password">
                                                <span class="md-line"></span>
                                            </div>
                                           
                                            <div class="row m-t-25 text-left">
                                                <div class="col-md-12">
                                                    <div class="checkbox-fade fade-in-primary">
                                                        <label>
                                                            <input type="checkbox" required value="">
                                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                            <span class="text-inverse">J'au lu et accepté <a href="#">les termes et conditions d'utilisations.</a></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">créer un compte</button>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <div class="col-md-12">
                                                    <p>Avez-vous dejà un compte ? <a href="/login">Se connecter</a> </p>
                                                 </div>
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <aside class="l-sidebar">
                            <div class="b-seller">
                                <div class="b-seller__header">
                                    <div class="b-seller__img"><img class="img-scale"
                                            src="assets/media/content/b-seller/1.jpg" alt="foto" /></div>
                                    <div class="b-seller__title">
                                        <div class="b-seller__name">Benin AUTO </div>
                                        <div class="b-seller__category">CONTACT</div>
                                    </div>
                                </div>
                                <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                                    <div class="b-seller__contact"><span class="d-block">Service commercial</span><a
                                            class="b-seller__phone" href="tel:22994513830">+22994513830</a><i
                                            class="ic text-primary flaticon-phone-call"></i></div>

                                </div>
                                <ul class="b-seller-soc list-unstyled" style="text-align: center;">
                                    <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#"
                                            target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
