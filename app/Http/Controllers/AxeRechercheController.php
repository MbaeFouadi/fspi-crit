<?php

namespace App\Http\Controllers;

use App\Models\axe_recherche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AxeRechercheController extends Controller
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
        $statut = 0;

        return view("add-axe-recherche",compact("user","statut"));
        
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
            
            "recherche"=>"required",
            "cle"=>"required",
       
        ]);

        DB::table("axe_recherches")
        ->insert([
           
            "recherche"=>$request->recherche,
            "mot_cle"=>$request->cle,
            "user_id"=>Auth::user()->id,

        ]);

     

        $identite=DB::table("identites")
        ->where("id",$request->id)
        ->orderByDesc("id")
        ->first();

        if($identite)
        {
            $axe=DB::table("axe_recherches")
            ->where("user_id",$identite->user_id)
            ->orderByDesc("id")
            ->first();
        }
       
       

        if(isset($axe) && isset($identite))
        {
            DB::table("identite_axe_recherches")
            ->insert([
                "identite_id"=>$identite->id,
                "axe_recherche_id"=>$axe->id,
                "user_id"=>Auth::user()->id,
    
            ]);
        }

        if($request->statut==0)
        {
         return back()->with("success","Enregistrement effectué avec succès");

        }
        else
        {
            $user = DB::table('identites')->where("id", $request->id)->first();
            $statut=1;
            $messages="Enregistrement effectué avec succès";

            return view ("add-axe-recherche",compact("user","statut","messages"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(axe_recherche $axe_recherche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(axe_recherche $axe_recherche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, axe_recherche $axe_recherche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(axe_recherche $axe_recherche)
    {
        //
    }

    public function recherche_axe_recherche()
    {
        return view("recherche_axe");
    }

    public function store_recherche_axe_recherche(Request $request)
    {

        $user = DB::table('identites')->where("id", $request->search)->first();
        $statut=1;
        if (isset($user)) {
            return view('add-axe-recherche', compact("user","statut"));
        } else {
            return back()->with("success", "Ce numero n'existe pas");
        }
    }
}
