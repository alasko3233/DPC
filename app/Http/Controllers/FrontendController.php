<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Domaine;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home(){
        $domaines=Domaine::orderby('id')->get();

        return view('welcome',compact('domaines'));
    }
    public function about(){
        return view('pages.about.index');
    }
    public function contact(){
        return view('pages.contact.index');
    }
    public function projet(){
        $projets=Projet::orderby('id')->get();

        return view('pages.projet.index',compact('projets'));
    }
    public function materiels(){

        return view('pages.materiels.index');
    }
    public function projetshow($id){
        // $projet=Projet::orderby('id')->get();
        $projet=Projet::findOrFail($id);
        $projets=Projet::orderby('id')->get();

        return view('pages.projet.show',compact('projet','projets'));
    }
    public function domaineshow($id){
        // $projet=Projet::orderby('id')->get();
        $domaine=Domaine::findOrFail($id);

        return view('pages.service.show',compact('domaine'));
    }
    public function service(){
        $domaines=Domaine::orderby('id')->get();

        return view('pages.service.index',compact('domaines'));
    }
    public function team(){
        return view('pages.team.index');
    }
}
