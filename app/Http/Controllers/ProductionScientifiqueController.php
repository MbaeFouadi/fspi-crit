<?php

namespace App\Http\Controllers;

use App\Models\identite;
use App\Models\production_scientifique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductionScientifiqueController extends Controller
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

        $types = DB::table("type_production_scientifiques")->get();

        return view("add-production", compact("user", "types"));
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

            "reference" => "required",
            "type_production_scientifique_id" => "required",
        ]);

        $identite = DB::table("identites")
            ->where("user_id", Auth::user()->id)
            ->orderByDesc("id")
            ->first();

        DB::table("production_scientifiques")
            ->insert([

                "reference" => $request->reference,
                "type_production_scientifique_id" => $request->type_production_scientifique_id,
                "identite_id" => $identite->id,
                "user_id" => Auth::user()->id,


            ]);

        // $production = DB::table("production_scientifiques")
        //     ->where("user_id", Auth::user()->id)
        //     ->orderByDesc("id")
        //     ->first();

        // $identite = DB::table("identites")
        //     ->where("user_id", Auth::user()->id)
        //     ->orderByDesc("id")
        //     ->first();

        // if (isset($production) && isset($identite)) {
        //     DB::table("identite_action_recherches")
        //         ->insert([
        //             "identite_id" => $identite->id,
        //             "action_recherche_id" => $production->id,
        //             "user_id" => Auth::user()->id,

        //         ]);
        // }

        return back()->with("success","Enregistrement effectué avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(production_scientifique $production_scientifique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(production_scientifique $production_scientifique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, production_scientifique $production_scientifique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(production_scientifique $production_scientifique)
    {
        //
    }
}
