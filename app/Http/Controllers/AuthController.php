<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function show_register(){
        return view('client.register');
    }
    public function show_login(){
        return view('client.login');
    }
    public function login(Request $requete){
        $credentials = $requete->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(request()->only(['email','password']))) {
            $requete->session()->regenerate();
 
            return redirect('/');
        }
 
        return back()->withErrors([
            'email' => 'Utilisateur non trouvé.',
        ])->onlyInput('email');
    }
    public function register(Request $requete){
        $credentials = $requete->validate([
            'email' => ['required', 'email','unique:users'],
            'password' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
        ]);
        User::create([
            'nom'=>$requete->nom,
            'prenom'=>$requete->prenom,
            'email'=>$requete->email,
            'password'=>Hash::make($requete->password),
        ]);
        
        return redirect('/login');
    }
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
