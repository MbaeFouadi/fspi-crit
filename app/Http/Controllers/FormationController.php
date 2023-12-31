<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormationController extends Controller
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
            $statut=0;

        return view("add-formation", compact("user","statut"));
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
            "diplome" => "required",
            "specialite" => "required",
            "etablissement" => "required",
            "pays" => "required",
            "ville" => "required",
            "date" => "required",
            "thematique" => "required",
        ]);

        DB::table("formations")
            ->insert([
                "diplome" => $request->diplome,
                "specialite" => $request->specialite,
                "etablissement" => $request->etablissement,
                "pays" => $request->pays,
                "ville" => $request->ville,
                "date" => $request->date,
                "thematique" => $request->thematique,
                "user_id" => Auth::user()->id,

            ]);

        $identite = DB::table("identites")
            ->where("id", $request->id)
            ->orderByDesc("id")
            ->first();

        if (isset($identite)) {
            $formation = DB::table("formations")
                ->where("user_id", $identite->user_id)
                ->orderByDesc("id")
                ->first();
        }




        if (isset($formation) && isset($identite)) {
            DB::table("identite_formations")
                ->insert([
                    "identite_id" => $identite->id,
                    "formation_id" => $formation->id,
                    "user_id" => $identite->user_id,

                ]);
        }

        if($request->statut==0)
        {
            return redirect("formations")->with("success", "Enregistrement effectué avec succès");
        }
        else
        {
            $user = DB::table('identites')->where("id", $request->id)->first();
            $statut=1;
            $messages="Enregistrement effectué avec succès";
            return view("add-formation",compact("user","statut","messages"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formation $formation)
    {
        //
    }

    public function recherche_formation()
    {
        return view('recherche_formation');
    }

    public function store_recherche_formation(Request $request)
    {

        $user = DB::table('identites')->where("id", $request->search)->first();
        $statut=1;
        if (isset($user)) {
            return view('add-formation', compact("user","statut"));
        } else {
            return back()->with("success", "Ce numero n'existe pas");
        }
    }

    
}
