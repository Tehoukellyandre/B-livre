<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre ;
use App\Http\Requests\CrudRequest ;
use  App\Models\Utilisateur ;
use Illuminate\Support\Facades\DB ;

class LivreController extends Controller
{
    function ajout(Utilisateur $userId){
            $livre = new Livre ;
            return view('livre.ajout', [
                  'userId' => $userId  ,
                  'livre' => $livre  ,
            ]) ;
    }
    function ajout_traitement(CrudRequest $request ,Utilisateur $userId){
             $livre= Livre::create($request->validated()) ;
             $livre->utilisateur_id = $userId->id ;
             $livre->save();
             return redirect()->route('livre.publication',[
                  'userId' => $userId  ,
             ])->with('success','Ajout du livre éffectuer') ;

    }

    function modifier(Livre $livre , Utilisateur $userId){
    //    dd(Request()->route()->uri );
        return view('livre.modifier' ,[
             'livre' => $livre ,
             'userId' => $userId  ,
        ]) ;
    }
    function modifier_traitement(CrudRequest $request, Livre $livre ,Utilisateur $userId){
        $livre->update($request->validated());
        return redirect()->route('livre.publication',[
                'userId' => $userId ,



            ])->with('success','Modification  du livre éffectuer') ;

    }
    function publication(Utilisateur $userId){
            $id = $userId->id ;
            $livre = DB::table('livres')->where('utilisateur_id',$id)->get();
            //  echo $livre->title ;
            // dd($livre) ;
            // return $livre ;
        return view('livre.publication' ,[
                'userId' => $userId ,
                 'livres' => $livre
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
        //  $slugLivre=DB::table('livres')->where("genre" , "==" , 'aventure')->get() ;
        // $slugLivre =Livre::all()->where("genre" , "==" , $slug);
        $slugLivre= DB::table('livres')->where('genre', $slug)->get() ;
        //  return ($slugLivre) ;
    //    foreach($slugLivre as $slug) {
    //           return $slug->title ;
    //    }


        //   $userId = $slugLivre->utilisateur_id ;
        //  dd (Utilisateur::where('id' , '==' , $userId)) ;
        return view('livre.lecture',[
            'slug' => $slug ,
            'slugLivre' => $slugLivre ,
        ]) ;
    }


    function supprimer(Livre $livre , Utilisateur $userId){
        $livre->delete() ;
        return redirect()->route('livre.publication',[
               'userId' => $userId ,
        ])->with('success','Suppression   du livre éffectuer') ;
    }
}
