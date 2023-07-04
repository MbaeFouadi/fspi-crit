<?php

namespace App\Http\Controllers;

use App\Models\action_recherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActionRechercheController extends Controller
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

        return view("add-action", compact("user"));
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

            "action" => "required",
            "cle" => "required",
            "organisme" => "required",
            "duree" => "required",


        ]);

        DB::table("action_recherches")
            ->insert([

                "action" => $request->action,
                "mot_cle" => $request->cle,
                "organisme" => $request->organisme,
                "duree" => $request->duree,
                "user_id" => Auth::user()->id,

            ]);

        $action = DB::table("action_recherches")
            ->where("user_id", Auth::user()->id)
            ->orderByDesc("id")
            ->first();

        $identite = DB::table("identites")
            ->where("user_id", Auth::user()->id)
            ->orderByDesc("id")
            ->first();

        if (isset($action) && isset($identite)) {
            DB::table("identite_action_recherches")
                ->insert([
                    "identite_id" => $identite->id,
                    "action_recherche_id" => $action->id,
                    "user_id" => Auth::user()->id,

                ]);
        }

        return back()->with("success","Enregistrement effectué avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(action_recherche $action_recherche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(action_recherche $action_recherche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, action_recherche $action_recherche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(action_recherche $action_recherche)
    {
        //
    }
}
