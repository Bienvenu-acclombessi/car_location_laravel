@extends('client.component.app')

@section('content')
      <div class="section-title-page area-bg area-bg_dark area-bg_op_60">

        
        <div class="area-bg__inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md">

                

                <h1 class="b-title-page">{{$voiture->nom}}</h1>

                  
                <div class="ui-decor bg-primary"></div>
              </div>
              <div class="col-md-auto"><a class="b-title-page__btn bg-primary" href="/locations/{{$voiture->id}}"> Louer ce vehicule</a></div>
            </div>
          </div>
        </div>
               </div>
      <!-- end .b-title-page-->
      
      <div class="container text-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html"><i class="ic text-primary fas fa-home"></i> Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Catalogue</li>
          </ol>
        </nav>
      </div>
      <!-- end breadcrumb-->


    <div class="l-main-content">
        <div class="container">
            <section class="b-goods-f">

                <div></div>

                <div class="row">



                    <div class="col-lg-8">

                        <h1 class="ui-title text-uppercase" style="font-size: 21px;">{{$voiture->nom}}</h1>
                        <div class="ui-decor bg-primary"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="b-goods-f-price">
                            <div class="b-goods-f-price__inner">
                                <!-- <div class="b-goods-f-price__msrp">MSRP:<strong> $34,500</strong></div> -->
                                <div class="b-goods-f-price__main bg-primary">Facile</div>
                            </div>
                            <!--   <div class="b-goods-f-price__note">Included Taxes & Checkup*</div> -->
                        </div>
                    </div>





                </div>


                <!-- <div>454545</div> -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="container mb-5">
                            <img
                                                    class="img-scale" src="{{Storage::url($voiture->photo)}}"
                                                    alt="{{$voiture->nom}}" />
                        </div>
                        <h2 class="b-goods-f__title mt-3">Spécifications du véhicule</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="b-goods-f__descr row">


                                    <dt class="b-goods-f__descr-title col-md-10">Bluetooth</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"><span>
                                        </span></dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Ordinateur de bord</dt>
                                    <dd class="b-goods-f__descr-info col-md-2">
                                    </dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Rétroviseurs couleur carrosserie</dt>
                                    <dd class="b-goods-f__descr-info col-md-2">
                                    </dd>
                                    <dt class="b-goods-f__descr-title col-md-10"> Affichage de la température extérieure
                                    </dt>
                                    <dd class="b-goods-f__descr-info col-md-2">
                                    </dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Pare-chocs couleur carrosserie</dt>
                                    <dd class="b-goods-f__descr-info col-md-2">
                                    </dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Kit mains libre</dt>
                                    <dd class="b-goods-f__descr-info col-md-2">
                                    </dd>

                                    <dt class="b-goods-f__descr-title col-md-10">Verrouillage centralisé à distance</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>

                                    <dt class="b-goods-f__descr-title col-md-10">Contrôle du climat</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>

                                    <dt class="b-goods-f__descr-title col-md-10">Régulateur de vitesse</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="b-goods-f__descr row">
                                    <dt class="b-goods-f__descr-title col-md-10">Barres de toit</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Toit ouvrant électrique</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Vitres électriques avant</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Lave-phares</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Volant en cuir</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                    <dt class="b-goods-f__descr-title col-md-10">Phares adaptatifs</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>

                                    <dt class="b-goods-f__descr-title col-md-10">Accoudoir central arrière</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>

                                    <dt class="b-goods-f__descr-title col-md-10">Accoudoir avant</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>

                                    <dt class="b-goods-f__descr-title col-md-10">La navigation</dt>
                                    <dd class="b-goods-f__descr-info col-md-2"></dd>
                                </dl>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="overview-tab" data-toggle="tab"
                                    href="#overview" role="tab" aria-controls="overview"
                                    aria-selected="true">Détails</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                data-aria-labelledby="overview-tab">
                                <p><ul>
                                    <li>Modèle: {{$voiture->modele}}</li>
                                    <li>Marque: {{$voiture->marque}}</li>
                                    <li>Annee: {{$voiture->annee}}</li>
                                    <li>Immatriculation: {{$voiture->immatriculation}}</li>



                                </ul></p>

                                <h3 class="b-goods-f__title-inner">INFORMATION GENERALE </h3>
                                <ul class="list list-mark-2">
                                    <li>
                                        Lorsque vous achetez votre voiture d'occasion chez EUROPE AUTO, une garantie de 12
                                        mois est incluse gratuitement.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="l-sidebar">
                            <div class="b-seller">
                                <div class="b-seller__header">
                                    <div class="b-seller__img"><img class="img-scale"
                                            src="{{asset('assets/media/content/b-seller/1.jpg')}}" alt="foto" /></div>
                                    <div class="b-seller__title">
                                        <div class="b-seller__name">Benin AUTO </div>
                                        <div class="b-seller__category">CONTACT</div>
                                    </div>
                                </div>
                                <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                                    <div class="b-seller__contact"><span class="d-block">Service commercial</span><a
                                            class="b-seller__phone" href="tel:07 80 94 84 82">+22994513830</a><i
                                            class="ic text-primary flaticon-phone-call"></i></div>

                                </div>
                                
                            </div>
                            <!-- end .b-seller-->

                            <div class="widget section-sidebar bg-gray">
                                <h3 class="widget-title bg-dark row justify-content-between align-items-center no-gutters">
                                    <i class="ic flaticon-car-2 bg-primary col-auto"></i><span
                                        class="widget-title__inner col">Message</span></h3>
                                <div class="widget-content">
                                    <div class="widget-inner">
                                        <form>

                                            <div class="form-group"> <input class="form-control" type="text"
                                                    name="voiture"
                                                    value=" Citroen C4 1.6 Blue-HDi Millenium Business EAT6 : 33E75FF28 "
                                                    placeholder="Nom et prénom"> </div>
                                            <div class="form-group"><input class="form-control" type="text"
                                                    name="nom" placeholder="Nom et prénom"> </div>
                                            <div class="form-group"> <input class="form-control" type="email"
                                                    name="email" placeholder="Adresse e-mail"> </div>
                                            <div class="form-group"><input class="form-control"
                                                    type="text"name="numero" placeholder="Numéro de téléphone">
                                            </div>



                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                                            </div>
                                            <button class="btn btn-default btn-lg w-100">ENVOYER LE MESSAGE</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
            <!-- end .b-goods-f-->

        </div>
    </div>
@endsection
