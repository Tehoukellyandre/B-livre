<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre ;
use App\Http\Requests\CrudRequest ;
use  App\Models\Utilisateur ;
// use Illuminate\Support\Facades\validator;

class LivreController extends Controller
{
    function ajout(){
            $livre = new Livre ;
            return view('livre.ajout', [
                 'livre'  =>$livre
            ]) ;
    }
    function ajout_traitement(CrudRequest $request){
             $livre= Livre::create($request->validated()) ;
             return redirect()->route('livre.ajout')->with('success','Ajout du livre éffectuer') ;

    }

    function modifier(Livre $livre){
    //    dd(Request()->route()->uri );
        return view('livre.modifier' ,[
             'livre' => $livre
        ]) ;
    }
    function modifier_traitement(CrudRequest $request, Livre $livre){
        $livre->update($request->validated());
        return redirect()->route('livre.modifier',[ 'livre'=>$livre ])->with('success','Modification  du livre éffectuer') ;

    }
    function publication(){

            return view('livre.publication' ,[
                 'livres' => Livre::all()
            ]);
        }
    function store(Utilisateur $userId){

            return view('livre.bibliotheque',[
                 'userId' => $userId ,
            ]) ;
    }
    function magie(){
        return view('livre.magie') ;
    }
    function lecture(string $slug){
        return view('livre.lecture',[
            'slug' => '$slug'
        ]) ;
    }


    // function supprimer(Livre $livre){
    //     $livre->delete() ;
    //     return redirect()->route('livre.modif')->with('success','Modification  du livre éffectuer') ;
    // }
}
