<?php

namespace App\Http\Controllers;

use App\Models\post_doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostDocController extends Controller
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
        $statut=0;

        return view("add-post_doc",compact("user","statut"));
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
            
            "specialite"=>"required",
            "etablissement"=>"required",
            "pays"=>"required",
            "ville"=>"required",
            "annee"=>"required",
            "thematique"=>"required",
        ]);

        DB::table("post_docs")
        ->insert([
           
            "specialite"=>$request->specialite,
            "etablissement"=>$request->etablissement,
            "pays"=>$request->pays,
            "ville"=>$request->ville,
            "annee"=>$request->annee,
            "thematique"=>$request->thematique,
            "user_id"=>Auth::user()->id,

        ]);

        $identite=DB::table("identites")
        ->where("id",$request->id)
        ->orderByDesc("id")
        ->first();

        if(isset($identite))
        {
            $post_doc=DB::table("post_docs")
            ->where("user_id",$identite->user_id)
            ->orderByDesc("id")
            ->first();
        }
     
        if(isset($post_doc) && isset($identite))
        {
            DB::table("identite_post_docs")
            ->insert([
                "identite_id"=>$identite->id,
                "post_doc_id"=>$post_doc->id,
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

            return view ("add-post_doc",compact("user","statut","messages"));
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(post_doc $post_doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post_doc $post_doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post_doc $post_doc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post_doc $post_doc)
    {
        //
    }

    public function recherche_post_doc()
    {
        return view("recherche_post_doc");
    }

    public function store_recherche_post_doc(Request $request)
    {

        $user = DB::table('identites')->where("id", $request->search)->first();
        $statut=1;
        if (isset($user)) {
            return view('add-post_doc', compact("user","statut"));
        } else {
            return back()->with("success", "Ce numéro n'existe pas");
        }
    }
}
