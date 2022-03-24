<?php

namespace App\Http\Controllers;

use  App\Models\Categorie;
use  App\Models\Etiquette;
use  App\Models\Plat;
use  App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class Maincontroller extends Controller

{
     public function index()
     {
         $message = 'foo bar baz';
         return view ('welcome',[
         'message'=> $message,
         ]);
     }

     public function carte()
     {
         $message = 'foo bar baz';
         return view ('main.carte',[
         'message'=> $message,
         ]);
     }

    
    
    public function test()
    {
        //recupére tous les plats
        //$plats=Plat::all();
        //recupere tous les plat en les triant par ordre  alpha de la colon "nom"
        
        $plats=Plat::select()->orderBy('nom')->get();
        foreach($plats as $plat){ 
            dump('#le palt');
            dump($plat->id);
            dump($plat->nom);
            //dump ($plat->descripton);
            dump($plat->prix);

            //
            $categorie = $plat->categorie()->first();
            dump('##la categorie');
            dump($categorie->id);
            dump($categorie->nom);
            dump($categorie->description);
            
        
        

            $etiquettes = $plat ->etiquettes()->orderBy('nom')->get();

            dump ('## les etiquettes');
            foreach($etiquettes as $etiquette ){
                dump($etiquette->id);
                dump($etiquette->nom);
                dump($etiquette->description);
        }
        }

        $etiquettes = Etiquette::select()->orderBy('nom')->get();
        foreach ($etiquettes as $etiquette ){

            dump($etiquette->id);
            dump($etiquette->nom);
            dump($etiquette->description);
            $plats = $etiquette->plats()->orderBy('nom')->get();

            foreach($plats as $plat){  

                dump($plat->id);
                dump ($plat->nom);
                dump ($plat->description);
                dump ($plat->prix);
            }


        }
        exit();
    $categories = Categorie::select()->orderBy('nom')->get();
    foreach ($categories as $categorie ){
        //erg des donnes log dans le fichier test log /laravel.log
    //Log::debug ($categories);
    dump($categorie->id);
    dump($categorie->nom);
    dump($categorie->description);

    $plats=$categorie->plats()->orderBy('nom')->get();

    foreach($plats as $plat ){  

        dump($plat->id);
        dump ($plat->nom);
        dump ($plat->description);
        dump ($plat->prix);
    }
}  
       exit();
    }
    public function testReservation()
{
    $reservation = new Reservation();
    $reservation->nom = 'toto';
    $reservation->tel = '0102030405';
    $reservation->date = '2022-04-01';
    $reservation->heure = '18:00';
    $reservation->personne = 200;
    // attention :il ne faut pas definir la confirmation 
    $reservation-> save();
    //recupere la reservation dont l'id=1
    $reservation = Reservation::find(1);
    //modification des donners
    $reservation -> confirmation=false;
    // enregistrement des donneres
    $reservation-> save();
    //recuper la dernier reservation enregistrée 
    // c-a-d le premier element du tri par ordre descendant de la colonne "id"
    $reservation = Reservation::select()->orderBy('id','desc')->first();
    dump ("suppression");
    dump ($reservation->id);
    $reservation-> delete();


    //recupere tous les reservation en les train par jour puipar heure 
    $reservations = Reservation::select()->orderBy('date')->orderBy('heure')->get();
    
 
    foreach($reservations as $reservation){

        dump('# reservation');

        dump ($reservation->id);
        dump ($reservation->nom);
        dump ($reservation->tel);
        dump ($reservation->date);
        dump($reservation->heure);
        dump ($reservation->personne);
        dump ($reservation->confirmation);
        dump ($reservation->created_at);
}
}

}
