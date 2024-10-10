<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscriptionRequest;
use App\Http\Requests\AuthRequest;
use  App\Models\Utilisateur ;
use   Illuminate\Support\Facades\Hash;
use   Illuminate\Support\Facades\Auth;
use  Illuminate\Routing\Redirector ;

class AuthController extends Controller
{
     public function inscription(){
          return view('users.inscription') ;
     }

     public function ins_traitement(InscriptionRequest $request){
            // $users = Utilisateur::create() ;
            $users = new Utilisateur() ;
            $users->name = $request->name ;
            $users->email = $request->email ;
            $users->password = Hash::make($request->password) ;
            $users->save() ;
            return redirect()->route('Auth.connexion')->with('success', 'inscription réussir vous pouvez vous connectez !');
   }

   public function connexion(){
      return view('users.connexion') ;
   }

    public function con_traitement(AuthRequest $request){
             $data = $request->validated() ;
            if(Auth::attempt($data) ){
                $request->session()->regenerate();
                 return  redirect()->intended(route('livre.store',[
                     'userId' =>  Auth::user()->id
                 ]))  ;
            }

           return to_route('Auth.connexion')->withErrors([
                 "email" =>  "email ou mot de passe invalide" ,
           ])->onlyInput('email') ;
    }
    public function deconnexion(){
          Auth::logout();
           return redirect()->route('Auth.connexion') ;
    }
}
