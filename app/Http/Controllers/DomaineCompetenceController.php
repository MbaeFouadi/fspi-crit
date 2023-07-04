<?php

namespace App\Http\Controllers;

use App\Models\domaine_competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DomaineCompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user=DB::table("identites")
        ->where("user_id",Auth::user()->id)
        ->orderByDesc("id")
        ->first();
        return view("add-domaine-competence",compact("user"));
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
            "domaine"=>"required",
        ]);

        $identite=DB::table("identites")
        ->where("user_id",Auth::user()->id)
        ->orderByDesc("id")
        ->first();

        if(isset($identite))
        {
            DB::table("domaine_competences")->insert([
                "designation"=>$request->domaine,
                "identite_id"=>$identite->id,
                "user_id"=>Auth::user()->id
            ]);
        }

        return back()->with("success","Enregistrement effectué avec succès");
       
    }

    /**
     * Display the specified resource.
     */
    public function show(domaine_competence $domaine_competence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(domaine_competence $domaine_competence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, domaine_competence $domaine_competence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(domaine_competence $domaine_competence)
    {
        //
    }
}
