@extends('client.component.app')

@section('content')
<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <h1 class="b-title-page">Voitures louées</h1>
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
            <li class="breadcrumb-item active" aria-current="page">voitures</li>
        </ol>
    </nav>
</div>
<!-- end breadcrumb-->

<div class="l-main-content">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-3">
                <aside class="l-sidebar">
                    <div class="widget section-sidebar bg-gray">
                        <h3 class="widget-title bg-dark row justify-content-between align-items-center no-gutters"><i class="ic flaticon-porsche bg-primary col-auto"></i><span class="widget-title__inner col">Search Filters</span></h3>
                        <div class="widget-content">
                            <div class="widget-inner">
                                
                            </div>
                        </div>
                    </div>
                    <!-- end .b-filter-->

                </aside>
            </div>
            <div class="col-xl-9">
                <div class="b-filter-goods">
                    
                    </div>
                <!-- end .b-filter-goods-->

                <div class="section-goods">
                    <div class="b-goods-group row">
                     @if (Auth::check() && Auth::user()->voitures()->count()>0)
                         
            @foreach(Auth::user()->voitures()->get() as $voiture)
               @if($voiture->pivot->termine!=1)
                        <div class="col-12">
                            <div class="b-goods b-goods_list b-goods_back_sm">
                                <button class="flip-btn"><span></span><span class="flip-btn-mdl"></span><span></span></button>
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="flip__front">
                                            <div class="b-goods__img"><img class="img-scale" src="{{Storage::url($voiture->photo)}}" alt="foto" /></div>
                                            <div class="b-goods__inner">
                                                <div class="b-goods__header">
                                                    <div class="b-goods__name">{{$voiture->nom}} </div>
                                                    <ul class="ui-rating list-unstyled">
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <div class="b-goods__check"><img class="img-fluid" src="assets/media/content/b-goods/check.jpg" alt="AutoCheck" /></div>
                                                </div>
                                               <div class="b-goods__footer">
                                                    <div><a class="btn btn-primary" href="{{url('/rendre_locations/'.$voiture->id.'/'.$voiture->pivot->id)}}">Rendre</a></div>
                                                    <ul class="b-goods-descr list-unstyled">
                                                        <li class="b-goods-descr__item">{{$voiture->pivot->begin_date}}</li>
                                                        <li class="b-goods-descr__item">À</li>
                                                        <li class="b-goods-descr__item">{{$voiture->pivot->end_date}}</li>
                                                        <li class="b-goods-descr__item">
                                                            @if(strtotime($voiture->pivot->end_date) < time())
                                                            <button class="btn btn-danger" type="button">Délai depassé</button>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip__back">
                                            <div class="b-goods__header">
                                                <div class="b-goods__name">Audi a7 2019</div>
                                                <div class="b-goods__category">Classic SUV</div>
                                                <div class="flip-btn-hide"></div>
                                            </div>
                                            <div class="b-goods-info">
                                                <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Cruise Control Option</span><span class="b-goods-info__desc col-auto">Standard</span></div>
                                                <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Transmission</span><span class="b-goods-info__desc col-auto">Automatic</span></div>
                                                <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Mileage</span><span class="b-goods-info__desc col-auto">48,000 km</span></div>
                                                <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Engine / Fuel Capacity</span><span class="b-goods-info__desc col-auto">V8 2.5L / 8 Gal</span></div>
                                                <div class="b-goods-info__item row no-gutters justify-content-between"><span class="b-goods-info__title col-auto">Vehicle Layout</span><span class="b-goods-info__desc col-auto">5 Pass, 4-Door Hatch</span></div>
                                            </div>
                                            <div class="flip__footer">
                                                <button class="btn btn-primary btn-lg w-100">Reserve now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->

                        </div>
                        @endif
                        @endforeach
                        @endif  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection