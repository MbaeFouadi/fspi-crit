<?php

namespace App\Http\Controllers;

use App\Models\identite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IdentiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grades=DB::table("grades")->get();
        $etablissements=DB::table("etablissements")->get();
        $professions=DB::table("professions")->get();
        $iles=DB::table("iles")->get();
        return view("add-identite",compact("grades","etablissements","professions","iles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
        
        "nom"=>"required",
        "prenom"=>"required",
        "email"=>"required",
        "adresse"=>"required",
        "telephone"=>"required",
        "ile_id"=>"required",
        "ville"=>"required",
        "grade_id"=>"required",
        "profession_id"=>"required",
      
        ]);
        
        DB::table("identites")
        ->insert([
        "cin"=>$request->cin,
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
        "email"=>$request->email,
        "adresse"=>$request->adresse,
        "telephone"=>$request->telephone,
        "fax"=>$request->fax,
        "langue"=>$request->langue,
        "ile_id"=>$request->ile_id,
        "ville"=>$request->ville,
        "grade_id"=>$request->grade_id,
        "profession_id"=>$request->profession_id,
        "etablissement_id"=>$request->etablissement_id,
        "departement"=>$request->departement,
        "laboratoire"=>$request->laboratoire,
        "lien_google_scholar"=>$request->lien_google_scholar,
        "lien_research_gate"=>$request->lien_research_gate,
        "lien_orcid"=>$request->lien_orcid,
        "user_id"=>Auth::user()->id,
        ]);

        return redirect("formations");
    }

    /**
     * Display the specified resource.
     */
    public function show(identite $identite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(identite $identite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, identite $identite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(identite $identite)
    {
        //
    }
}
