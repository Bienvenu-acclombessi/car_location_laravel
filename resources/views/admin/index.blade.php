
@extends('admin.component.app')
@section('page_body')
    
<div class="page-body">
    <div class="row">

          <!-- order-card start -->
          <div class="col-md-6 col-xl-3">
              <div class="card bg-c-blue order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Voitures</h6>
                      <h2 class="text-right"><i class=" ti-car f-left"></i><span>{{$vc}}</span></h2>
                      <p class="m-b-0">Disponible<span class="f-right">{{$vdc}}</span></p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-3">
              <div class="card bg-c-green order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Utilisateurs</h6>
                      <h2 class="text-right"><i class=" icofont icofont-user f-left"></i><span>{{$cc}}</span></h2>
                      <p class="m-b-0">Aujourd'hui<span class="f-right">{{$cc}}</span></p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-3">
              <div class="card bg-c-yellow order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Disponible</h6>
                      <h2 class="text-right"><i class="ti-reload f-left"></i><span>{{$vdc}}</span></h2>
                      <p class="m-b-0">Aujourd'hui<span class="f-right">{{$vdc}}</span></p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-xl-3">
              <div class="card bg-c-pink order-card">
                  <div class="card-block">
                      <h6 class="m-b-20">Non disponible</h6>
                      <h2 class="text-right"><i class="ti-wallet f-left"></i><span>{{$vndc}}</span></h2>
                      <p class="m-b-0">Ce mois<span class="f-right">{{$vndc}}</span></p>
                  </div>
              </div>
          </div>
          <!-- order-card end -->

          <!-- statustic and process start -->
          <div class="col-lg-8 col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Statistics</h5>
                      <div class="card-header-right">
                          <ul class="list-unstyled card-option">
                              <li><i class="fa fa-chevron-left"></i></li>
                              <li><i class="fa fa-window-maximize full-card"></i></li>
                              <li><i class="fa fa-minus minimize-card"></i></li>
                              <li><i class="fa fa-refresh reload-card"></i></li>
                              <li><i class="fa fa-times close-card"></i></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-block">
                      <canvas id="Statistics-chart" height="200"></canvas>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Customer Feedback</h5>
                  </div>
                  <div class="card-block">
                      <span class="d-block text-c-blue f-24 f-w-600 text-center">365247</span>
                      <canvas id="feedback-chart" height="100"></canvas>
                      <div class="row justify-content-center m-t-15">
                          <div class="col-auto b-r-default m-t-5 m-b-5">
                              <h4>83%</h4>
                              <p class="text-success m-b-0"><i class="ti-hand-point-up m-r-5"></i>Positive</p>
                          </div>
                          <div class="col-auto m-t-5 m-b-5">
                              <h4>17%</h4>
                              <p class="text-danger m-b-0"><i class="ti-hand-point-down m-r-5"></i>Negative</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- statustic and process end -->

          <!-- social statustic start -->
          <div class="col-md-12 col-lg-4">
              <div class="card">
                  <div class="card-block text-center">
                      <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                      <h4 class="m-t-20"><span class="text-c-blue">8.62k</span> Subscribers</h4>
                      <p class="m-b-20">Your main list is growing</p>
                      <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="card">
                  <div class="card-block text-center">
                      <i class="fa fa-twitter text-c-green d-block f-40"></i>
                      <h4 class="m-t-20"><span class="text-c-blgreenue">+40</span> Followers</h4>
                      <p class="m-b-20">Your main list is growing</p>
                      <button class="btn btn-success btn-sm btn-round">Check them out</button>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="card">
                  <div class="card-block text-center">
                      <i class="fa fa-puzzle-piece text-c-pink d-block f-40"></i>
                      <h4 class="m-t-20">Business Plan</h4>
                      <p class="m-b-20">This is your current active plan</p>
                      <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                  </div>
              </div>
          </div>
          <!-- social statustic end -->

         
      </div>
  </div>
@endsection