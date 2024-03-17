<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $articles;
    
    public function __construct(){

        $this->articles = [
        ['title' => 'Raccoglitori e Cacciatori: chi eravamo?',
        'category' => 'Antropologia',
        'description' => 'Come siamo arrivati ad essere la specie dominante.'],
       ['title' => 'La Rivoluzione Agricola: quando come e perchè.',
        'category' => 'Sociologia',
        'description' => 'Pro e Contro che hanno influenzato la nostra società.'],
       ['title' => 'I grandi Padri Ridistributori: le fondamenta delle città.',
        'category' => 'Antropologia',
        'description' => 'Quando un Capo ridistribuiva le ricchezze a tutta la tribù.'],
        ];
    }
    
    
    public function home(){
        return view('home', ['title' => 'Antropologia Facile']);
    }

    public function contacts(){
        return view('contatti', ['title' => 'Contatti']);
    }

    public function aboutMe(){
        return view('chi-sono', [
            'title' => 'Chi sono', 
            'description' => 'lorem bla bla bla'
        ]);
    }

    public function articles(){
        
        return view('articles', ['articles' => $this->articles]);
    }

    public function article($article){
        
        return view('article', ['article' => $this->articles[$article]]);
    }
}