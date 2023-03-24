@extends('client.component.app')
@section('content')
    <div class="main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="900px"
        data-slider-arrows="true" data-slider-buttons="false">

        <div class="sp-slides">
            <!-- Slide 1-->
            <div class="main-slider__slide sp-slide"><img class="sp-image"
                    src="{{ asset('assets/media/content/b-main-slider/bg-1.jpg') }}" alt="slider" />
                <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left"
                    data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <div class="main-slider__slogan">Vehicules </div>
                    <div class="main-slider__title" style="font-size: 50px!important;"> d'occasion garanties</div>
                </div>
                <div class="sp-layer" data-width="100%" data-show-transition="down" data-hide-transition="top"
                    data-show-duration="1500" data-show-delay="800" data-hide-delay="400"><img
                        class="main-slider__figure-1 img-fluid" src="/assets/cars.png"
                        alt="foto" /></div>
                <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left"
                    data-show-duration="800" data-show-delay="400" data-hide-delay="400"><a class="main-slider__link"
                        href="{{url('/voitures')}}">Trouver une voiture</a></div>
            </div>
        </div>
        <div class="sp-slides">
            <!-- Slide 1-->
            <div class="main-slider__slide sp-slide"><img class="sp-image"
                    src="{{ asset('assets/media/content/b-main-slider/bg-1.jpg') }}" alt="slider" />
                <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left"
                    data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                    <div class="main-slider__slogan">Pratique</div>
                    <div class="main-slider__title" style="font-size: 50px!important;">Securise</div>
                </div>
                <div class="sp-layer" data-width="100%" data-show-transition="down" data-hide-transition="top"
                    data-show-duration="1500" data-show-delay="800" data-hide-delay="400"><img
                        class="main-slider__figure-1 img-fluid" src="assets/corolla.png"
                        alt="foto" /></div>
                <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left"
                    data-show-duration="800" data-show-delay="400" data-hide-delay="400"><a class="main-slider__link"
                        href="{{url('/voitures')}}">Trouver une voiture</a></div>
            </div>
        </div>
    </div>
    <!-- end .main-slider-->

    <div class="group-sections mt-3">
        
        <!-- end .b-main-filter-->

        <section class="section-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <div class="ui-subtitle">Bienvenue à </div>
                        <h2 class="ui-title text-uppercase">Benin Auto Location</h2>
                        <div class="ui-decor bg-primary"></div>

                        <p>Louer une voiture facilement en ligne. Ensuite, vous allez venir payer directement chez nous pour entrer en possession de la voiture, et
                            cela partout au Bénin.</p>
                    </div>
                </div>
                <div class="b-advantages-group row">
                    <div class="col-lg-4">
                        <div class="b-advantages row no-gutters">
                            <div class="col-auto"><i class="ic flaticon-lock"></i></div>
                            <div class="b-advantages__title col">Nous sommes un grand concessionnaire automobile</div>
                        </div>
                        <!-- end .b-advantages-->
                    </div>
                    <div class="col-lg-4">
                        <div class="b-advantages row no-gutters active">
                            <div class="col-auto"><i class="ic flaticon-vehicle-3"></i></div>
                            <div class="b-advantages__title col">Nous offrons les meilleurs prix de location de voitures pour tous
                            </div>
                        </div>
                        <!-- end .b-advantages-->
                    </div>
                    <div class="col-lg-4">
                        <div class="b-advantages row no-gutters">
                            <div class="col-auto"><i class="ic flaticon-toolbox-1"></i></div>
                            <div class="b-advantages__title col">La voiture de vos rêves est ici, au meilleur prix garanti
                            </div>
                        </div>
                        <!-- end .b-advantages-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section-contacts section-default">
        <div class="container">
            <div class="section-contacts__inner">
                <div class="row align-items-end">

                    <div class="col-lg-12">
                        <div class="b-contacts">
                            <h2 class="b-contacts__title">Aussi simple et facile que de faire des locations en ligne...</h2>
                            <!--  <h2 class="b-contacts__title">With Over<span class="text-primary"> 150+</span> Partners Locations</h2> -->
                            <div class="b-contacts__info"> Il est désormais possible de louer une voiture de rêve.
                                Épargnez-vous la fastidieuse recherche de voitures d'occasion, les longs trajets et
                                d'innombrables rencontres. Louez plutôt votre prochaine voiture d'occasion depuis le
                                confort de votre canapé - Benin AUTO Location vous livre gratuitement.</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="b-phone">
                                        <div class="b-phone__ic fas fa-phone text-primary"></div>
                                        <div class="b-phone__main">
                                            <div class="b-phone__title">Vous avez des questions ?</div><a
                                                class="b-phone__phone" href="tel:+22994513830">+22994513830</a>
                                            <div class="b-phone__address">Bénin</div>
                                        </div>
                                    </div>
                                    <!-- end .b-phone-->

                                </div>
                            </div>
                        </div>
                        <!-- end .b-contacts-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-default bg-light">
        <div class="container">
            <div class="text-center">
                <div class="ui-subtitle">BENIN AUTO</div>
                <h2 class="ui-title text-uppercase">Les voitures disponibles pour vous</h2>
                <div class="ui-decor bg-primary"></div>

            </div>
            <div class="b-isotope">
                <ul class="b-isotope-grid grid list-unstyled row no-gutters">
                    <li class="grid-sizer col-lg-4 col-md-6"></li>



                    @foreach($voitures as $voiture)
                    


                      

                    <li class="b-isotope-grid__item grid-item all mercedes honda col-lg-4 col-md-6">
                        <div class="b-goods">

                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="flip__front">
                                        <div class="b-goods__img"><a href="vehicle-details6056.html?id=072B03060"><img
                                                    class="img-scale" src="{{Storage::url($voiture->photo)}}"
                                                    alt="{{$voiture->nom}}" /></a></div>
                                        <div class="b-goods__inner">
                                            <div class="b-goods__header">
                                                <div class="b-goods__name" style="font-size: 18px;"> <a
                                                        href="{{url('/voitures/'.$voiture->id)}}"> {{$voiture->nom}}</a></div>
                                                <ul class="ui-rating list-unstyled">
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="b-goods__check"><img class="img-fluid"
                                                        src="assets/media/content/b-goods/check.jpg" alt="AutoCheck" />
                                                </div>
                                            </div>
                                            <div class="b-goods__footer">
                                                <div class="b-goods__price">
                                                    <a href="/locations/{{$voiture->id}}" class="btn btn-primary">lOUER</a>
                                                </div>
                                                <ul class="b-goods-descr list-unstyled">
                                                    <li class="b-goods-descr__item">{{$voiture->annee}}</li>
                                                    <li class="b-goods-descr__item">{{$voiture->marque}}</li>
                                                    <li class="b-goods-descr__item">{{$voiture->modele}}</li>
                                                </ul>
                                                <button class="b-goods__link text-primary" type="button">Compare</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end .b-goods-->

                    </li>
                    @endforeach

                 






                </ul>
            </div>
            <!-- end .b-isotope-->

        </div>
    </section>

    <section class="section-fag">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-fag__inner">
                        <!-- <div class="ui-subtitle">BENIN AUTO auto dealers website</div> -->
                        <h2 class="ui-title text-uppercase" style="text-align: center;">Vos avantages</h2>

                        <div class="ui-accordion accordion" id="accordion-1">
                            <div class="card">

                                <div class="collapse show" id="collapse1" data-aria-labelledby="heading1"
                                    data-parent="#accordion-1">
                                    <div class="card-body">

                                        Avec Benin AUTO, la location d'une voiture est plus facile que jamais. Voici nos
                                        avantages :<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Processus de commande 100 % en ligne<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Grand choix de toutes les marques et modèles<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Salle d'exposition en ligne et séance de test virtuelle<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Une grande sélection de voitures de grande qualité, entièrement reconditionnées<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Différentes options de financement<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Garantie 1 an incluse avec possibilités d'extension<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Livraison gratuite à domicile<br>
                                        <i class="fa fa-check" aria-hidden="true" style="color: #E3740E;"></i>
                                        Retour sans frais sous 14 jours

                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end .b-faq-->
    <br>
    <br>
    <br>

    <div class="section-goods-vip"><a class="b-goods-vip b-goods-vip_1" href="#">
            <div class="b-goods-vip__main">
                <div class="b-goods-vip__slogan"></div>
                <div class="b-goods-vip__title">Peugeot <span class="text-primary"> 208</span></div>
                <div class="b-goods-vip__subtitle">2021</div>
            </div>
        </a><a class="b-goods-vip b-goods-vip_2" href="#">

            <div class="b-goods-vip__main">
                <div class="b-goods-vip__subtitle"></div>

                <div class="b-goods-vip__title">Toyota <span class="text-primary"> C-HR</span></div>
                <div class="b-goods-vip__subtitle">2020</div>

                <div class="b-goods-vip__title"></div>
                <div class="b-goods-vip__slogan"></div>
            </div>
        </a><a class="b-goods-vip b-goods-vip_3" href="#">

            <div class="b-goods-vip__main">



                <div class="b-goods-vip__slogan"></div>
                <div class="b-goods-vip__title">Mercedes-Benz <span class="text-primary"> EQC</span></div>
                <div class="b-goods-vip__subtitle">2021</div>

                <!--  <div class="row justify-content-between align-items-center">
            <div class="b-goods-vip__title col"></div>
            <div class="col-auto">
              <div class="b-goods-vip__label b-goods-vip__label-3 bg-primary"></div>
            </div>
          </div> -->
                <!--  <div class="b-goods-vip__slogan">Limited Time Offer</div> -->
            </div>
        </a></div>


    <div class="section-bnr-2 mt-4">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <section class="b-bnr-2 b-bnr-2_first bg-primary">
                        <h2 class="b-bnr-2__title">Voulez-vous louer un véhicule?</h2>
                        <div class="b-bnr-2__info">La voiture de vos rêves est ici</div>
                        <a class="btn btn-white btn-lg" href="inventory-grid.html">Choisir un véhicule</a>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="b-bnr-2 b-bnr-2_last bg-dark">
                        <h2 class="b-bnr-2__title">Avez-vous besoin <br> d'aide?</h2>
                        <div class="b-bnr-2__info">Veuillez nous contacter</div><a class="btn btn-white btn-lg"
                            href="contacts.html">Contact</a>
                    </section>
                </div>
            </div><img class="b-bnr-2__figure img-scale" src="assets/media/content/b-bnr/figure-1.png" alt="foto" />
        </div>
    </div>
@endsection
