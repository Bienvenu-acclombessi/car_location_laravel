<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voiture;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $voiture_count=Voiture::count();
        $client_count=User::count();
        $voiture_dispo_count=Voiture::where('disponible',1)->count();
        
        $voiture_non_dispo_count=Voiture::where('disponible',0)->count();
        return view('admin.index',[
            'vc'=>$voiture_count,
            'cc'=>$client_count,
            'vdc'=>$voiture_dispo_count,
            'vndc'=>$voiture_non_dispo_count
        ]);
    }
    public function new(){
        return view('admin.new_car');
    }
    public function clients(){
        $users=User::all();

        return view('admin.clients',[
            'users'=>$users
        ]);
    }
    public function locations(){
        $users=User::all();

        return view('admin.locations',[
            'users'=>$users
        ]);
    }
    public function voitures(){
        $voitures=Voiture::all();
        $voitures_disponibles=Voiture::where('disponible',1)->get();
        $voitures_non_disponibles=Voiture::where('disponible',0)->get();
        return view('admin.voitures',[
            'voitures'=>$voitures,
            'voitures_dispo'=>$voitures_disponibles,
            'voitures_non_dispo'=>$voitures_non_disponibles
        ]);
    }
    public function voiture($id){
       
        $voiture=Voiture::find($id);
        // $voitures_disponibles=Voiture::where('disponible',1)->get();
        // $voitures_non_disponibles=Voiture::where('disponible',0)->get();
        return view('admin.voiture',[
            'voiture'=>$voiture,
        ]);
    }
    public function edit($id){
       
        $voiture=Voiture::find($id);
        return view('admin.edit',[
            'voiture'=>$voiture,
        ]);
    }

}
