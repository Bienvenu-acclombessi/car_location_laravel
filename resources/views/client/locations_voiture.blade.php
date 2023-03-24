@extends('client.component.app')

@section('content')
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <h1 class="b-title-page">Louer la voiture</h1>
                    <div class="ui-decor bg-primary"></div>
                </div>
                <div class="col-md-auto"><a class="b-title-page__btn bg-primary" href="#">Location d'une nouvelle </a></div>
            </div>
        </div>
    </div>
</div>
<!-- end .b-title-page-->

<div class="container text-center">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="ic text-primary fas fa-home"></i> Locations</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$voiture->nom}}</li>
        </ol>
    </nav>
</div>
<!-- end breadcrumb-->

<div class="l-main-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <aside class="l-sidebar">
                    <div class="widget section-sidebar bg-gray">
                        <h3 class="widget-title bg-dark row justify-content-between align-items-center no-gutters"><i class="ic flaticon-porsche bg-primary col-auto"></i><span class="widget-title__inner col">Période</span></h3>
                        <div class="widget-content">
                            <div class="widget-inner">
                                @if($errors->any())
     
                                <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                     @endforeach
                                 </ul>
                                </div>
                             @endif
                                <form method="POST" action="{{route('louer')}}">
                                    @csrf
                                    <input type="hidden" name="voiture_id" value="{{$voiture->id}}">
                                    <div class="b-filter__main">
                                        <div class="b-filter__row row">
                                            <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                                <label for="begin">Date de debut de location</label>
                                                <input class="form-control" id="begin" name="begin"  type="date" data-width="100%" placeholder="Debut" />
                                                    
                                            </div>
                                            <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                                <label for="begin">Date de fin de location</label>
                                                <input class="form-control"  name="end"  type="date" data-width="100%" placeholder="Fin" />
                                                    
                                            </div>
                                        </div>
                                    <input class="btn btn-primary btn-lg w-100" type="submit" value="Louer" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end .b-filter-->

                </aside>
            </div>
            <div class="col-xl-3">
                

                <div class="section-goods">
                    <div class="b-goods-group row">
                        
           
                        <div class="col-12">
                            <div class="b-goods b-goods_back_sm">
                                <button class="flip-btn"><span></span><span class="flip-btn-mdl"></span><span></span></button>
                                <div class="flip-container">
                                  <div class="flipper">
                                    <div class="flip__front">
                                      <div class="b-goods__img"><a href="{{url('/voitures/'.$voiture->id)}}">  <img class="img-scale" src="{{Storage::url($voiture->photo)}}" alt="foto"/></a></div>
                                      <div class="b-goods__inner">
                                        <div class="b-goods__header">
                                          <div class="b-goods__name">{{$voiture->nom}}</div>
                                          <ul class="ui-rating list-unstyled">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                          </ul>
                                          <div class="b-goods__check"><img class="img-fluid" src="{{asset('assets/media/content/b-goods/check.jpg')}}" alt="AutoCheck"/></div>
                                        </div>
                                        <div class="b-goods__footer">
                                          
                                          <ul class="b-goods-descr list-unstyled">
                                              <li class="b-goods-descr__item">{{$voiture->annee}}</li>
                                              <li class="b-goods-descr__item">{{$voiture->marque}}</li>
                                              <li class="b-goods-descr__item">{{$voiture->modele}}</li>
                                          </ul>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="flip__back">
                                      <div class="b-goods__header">
                                        <div class="b-goods__name">{{$voiture->nom}}</div>
                                        <div class="flip-btn-hide"></div>
                                      </div>
                                      <div class="b-goods-info">
                                        <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Modèle:</span><span class="b-goods-info__desc col-auto">{{$voiture->modele}}</span></div>
                                        <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Marque: </span><span class="b-goods-info__desc col-auto">{{$voiture->marque}}</span></div>
                                        <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Immatriculé:</span><span class="b-goods-info__desc col-auto">{{$voiture->immatriculation}}</span></div>
                                        <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Année:</span><span class="b-goods-info__desc col-auto">{{$voiture->annee}}</span></div>
                                        <!-- <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Anciens Propriétaires </span><span class="b-goods-info__desc col-auto">2</span></div> -->
                                      </div>
                                      <div class="flip__footer">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            <!-- end .b-goods-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection