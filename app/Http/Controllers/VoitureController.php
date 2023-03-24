<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function new(Request $requete){
        $credentials = $requete->validate([
            'nom' => ['required'],
            'modele' => ['required'],
            'marque' => ['required'],
            'annee' => ['required'],
            'immatriculation' => ['required'],
            'photo' => ['required','file'],
        ]);
        $path = $requete->file('photo')->store('public/voitures_photo');
    if(isset($path) AND !empty($path))
        Voiture::create([
        'nom' => $requete->nom,
        'modele' => $requete->modele,
        'marque' => $requete->marque,
        'annee' => $requete->annee,
        'immatriculation' => $requete->immatriculation,
        'photo' => $path,
        ]);
      else 
      return back()->withErrors([
        'photo' => 'Une erreur s\'est produit. Veuillez réessayer',
    ])->onlyInput('photo');

    return back()->with(['success_message'=>'Voiture ajouté avec success']);
     
    }
    public function edit(Request $requete){
        $credentials = $requete->validate([
            'nom' => ['required'],
            'modele' => ['required'],
            'marque' => ['required'],
            'annee' => ['required'],
            'immatriculation' => ['required'],
            'id' => ['required'],
        ]);
        $voiture=Voiture::find($requete->id);
        if($voiture!=null){
            $voiture->update(
                [
                    'nom' => $requete->nom,
                    'modele' => $requete->modele,
                    'marque' => $requete->marque,
                    'annee' => $requete->annee,
                    'immatriculation' => $requete->immatriculation
                ]
            );

            return back()->with(['success_message'=>'Voiture modifiée avec success']);
     
        }
        return back()->with(['success_message'=>'Voiture modifiée avec success']);
     
       
    }
    public function delete($id){
        $voiture=Voiture::find($id);
        $voiture->delete();
            
        return back()->with(['success_message'=>'Voiture modifiée avec success']);
    }
    public function edit_photo(Request $requete){
        $credentials = $requete->validate([
            'id' => ['required'],
            'photo' => ['required','file'],
        ]);
            
        $path = $requete->file('photo')->store('public/voitures_photo');
        $voiture=Voiture::find($requete->id);
        if($voiture!=null){
            $voiture->update(
                [
                    'photo' => $path,
                ]
            );

            return back()->with(['success_message'=>'Voiture modifiée avec success']);
     
        }
        return back()->with(['success_message'=>'Une erreur']);
    }
}
