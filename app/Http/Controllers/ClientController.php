<?php

namespace App\Http\Controllers;

use App\Models\Voiture;

use App\Models\Location;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   public function index(){
    // $voitures=Voiture::all();
    $voitures_disponibles=Voiture::where('disponible',1)->get();
    return view('client.index',[
        'voitures'=>$voitures_disponibles
    ]);
    }

    public function show_locations(){
        $voitures_disponibles=Voiture::where('disponible',1)->get();
        return view('client.locations',[
            'voitures'=>$voitures_disponibles
        ]);
    }
    public function show_locations_form($id){
        $voiture=Voiture::find($id);
 return view('client.locations_voiture',[
            'voiture'=>$voiture,
        ]);
    }
    public function voitures(){
        $voitures_disponibles=Voiture::where('disponible',1)->get();
    return view('client.voitures',[
        'voitures'=>$voitures_disponibles
    ]);
    }
    public function show_voiture($id){
        $voiture=Voiture::find($id);
        // $voitures_disponibles=Voiture::where('disponible',1)->get();
        // $voitures_non_disponibles=Voiture::where('disponible',0)->get();
        return view('client.voiture_description',[
            'voiture'=>$voiture,
        ]);
    }
    public function new_location(Request $requete)
    {
        $credentials = $requete->validate([
            'begin' => ['required','date','after_or_equal:today'],
            'end' => ['required','date','after_or_equal:today','after:begin'],
            'voiture_id'=>['required']
        ]);
            $voiture=Voiture::find($requete->voiture_id);
            if($voiture->disponible==1){
                $voiture->disponible=0;
                $voiture->save();
Location::create([
        'user_id' => auth()->id(),
        'voiture_id' => $requete->voiture_id,
        'begin_date' => $requete->begin,
        'end_date' => $requete->end,
        ]);
        
        return redirect('/locations');
            }else{
return back()->with(['error_message'=>'Cette voiture n\'est pas disponible ']);
     
            }
        
     
     

    }
    public function rendre_location($id_voiture,$id_location)
    {
        $voiture=Voiture::find($id_voiture);
        $voiture->disponible=1;
        $voiture->save();
        $location=Location::find($id_location);
        $location->termine=1;
        $location->save();
        return back();
    }
    public function about(){
        return view('client.about');
    }
}
