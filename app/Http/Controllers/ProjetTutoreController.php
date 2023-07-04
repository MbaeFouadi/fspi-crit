<?php

namespace App\Http\Controllers;

use App\Models\projet_tutore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjetTutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = DB::table("identites")
            ->where("user_id", Auth::user()->id)
            ->orderByDesc("id")
            ->first();

            $niveaux=DB::table("niveau_etude")->get();

        return view("add-projet", compact("user","niveaux"));
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
            
            "niveau_etude_id"=>"required",
            "annee"=>"required",
            "thematique"=>"required",
        ]);

        DB::table("projet_tutores")
        ->insert([
           
            "niveau_etude_id"=>$request->niveau_etude_id,
            "annee"=>$request->annee,
            "thematique"=>$request->thematique,
            "user_id"=>Auth::user()->id,

        ]);

        $projet=DB::table("projet_tutores")
        ->where("user_id",Auth::user()->id)
        ->orderByDesc("id")
        ->first();

        $identite=DB::table("identites")
        ->where("user_id",Auth::user()->id)
        ->orderByDesc("id")
        ->first();

        if(isset($projet) && isset($identite))
        {
            DB::table("identite_projet_tutores")
            ->insert([
                "identite_id"=>$identite->id,
                "projet_tutore_id"=>$projet->id,
                "user_id"=>Auth::user()->id,
    
            ]);
        }

        return back()->with("success","Enregistrement effectué avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(projet_tutore $projet_tutore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projet_tutore $projet_tutore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, projet_tutore $projet_tutore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(projet_tutore $projet_tutore)
    {
        //
    }
}
