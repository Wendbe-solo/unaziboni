<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

use Symfony\Contracts\Service\Attribute\Required;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants = Etudiant::orderBy("nom","asc")->get();
        return view("esai",compact("etudiants"));
    }
    public function create(){
        $etudiants = Etudiant::all();
        return view("createEtudiant",compact("etudiants"));
    }
    public function edit(Etudiant $etudiant){
        return view("editEtudiant",compact("etudiant"));
    }
    public function store(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "matricule"=>"required",
            "cycle"=>"required",
            "age"=>"required",
            "email"=>"required",
            "numero"=>"required",
            "photo"=>"required"
            
        ]);
        Etudiant::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "matricule"=>$request->matricule,
            "cycle"=>$request->cycle,
            "age"=>$request->age,
            "email"=>$request->email,
            "numero"=>$request->numero,
            "photo"=>$request->photo
        ]);
        return back()->with("success","Etudiant enregistrer avec succès");
    }
    public function delete(Etudiant $etudiant){
        $etudiant->delete();
        return back()->with("sucessDelete","Etudiant supprimer avec succès");
    }
    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "matricule"=>"required",
            "cycle"=>"required",
            "age"=>"required",
            "email"=>"required",
            "numero"=>"required",
            "photo"=>"required"
        ]);
        $etudiant->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "matricule"=>$request->matricule,
            "cycle"=>$request->cycle,
            "age"=>$request->age,
            "email"=>$request->email,
            "numero"=>$request->numero,
            "photo"=>$request->photo
        ]);
        return back()->with("success","Etudiant modifier avec succès");
    }

}
