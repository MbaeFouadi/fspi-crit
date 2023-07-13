<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    //

    public function login()
    {
        return view("login");
    }

    public function add_user()
    {

        return view("add-user");
    }

    public function show_user()
    {
        $users = DB::table("users")
            ->join("role_user", "users.id", "role_user.user_id")
            ->join("roles", "roles.id", "role_user.role_id")
            ->get();
        return view("show-user", compact("users"));
    }

    public function add_etablissement()
    {
        return view("add-etablissement");
    }

    public function show_etablissement()
    {
        return view("show-etablissement");
    }

    public function add_coordonnees()
    {
        return view("add-identite");
    }

    public function add_formation()
    {
        return view("add-formation");
    }

    public function add_domaine_competence()
    {
        return view("add-domaine-competence");
    }

    public function axe_recherche()
    {
        return view("add-axe-recherche");
    }

    public function action_au_pres_organisme()
    {
        return view("add-action");
    }

    public function add_production()
    {
        return view("add-production");
    }

    public function post_doc()
    {
        return view("add-post_doc");
    }

    public function add_projet()
    {
        return view("add-projet");
    }

    public function recherche_liste()
    {

        $etablissements = DB::table("etablissements")
            ->get();

        $professions = DB::table("professions")
            ->get();

        $iles = DB::table("iles")
            ->get();
        return view("recherche-liste", compact("etablissements", "professions", "iles"));
    }

    public function statistique_etablissement()
    {

        $udc = DB::table("identites")
            ->where("etablissement_id", 1)
            ->count();

        $cndrs = DB::table("identites")
            ->where("etablissement_id", 2)
            ->count();

        $inrap = DB::table("identites")
            ->where("etablissement_id", 3)
            ->count();

        $non = DB::table("identites")
            ->where("etablissement_id",100000)
            ->count();

        return view("statistique-etablissement", compact("udc", "cndrs", "inrap", "non"));
    }

    public function statistique_profession()
    {

        $datas=DB::table("identites")
        ->join("professions","identites.profession_id","professions.id")
        ->distinct()
        ->select("professions.designation as designation","professions.id as id")
        ->get();
        return view("statistique-profession",compact("datas"));
    }

    public function add_grade()
    {
        return view("add-grade");
    }

    public function add_profession()
    {
        return view("add-profession");
    }

    public function fiche()
    {
        return view("fiche");
    }

    public function fiches($id)
    {
        $data = DB::table("identites")
            ->join("grades", "identites.grade_id", "grades.id")
            ->join("professions", "identites.profession_id", "professions.id")
            ->join("etablissements", "identites.etablissement_id", "etablissements.id")
            ->join("iles", "identites.ile_id", "iles.id")
            ->select("identites.*", "grades.code as grade", "professions.designation as profession", "iles.designation as ile", "etablissements.code as etablissement")
            ->where("identites.id", $id)
            ->first();

        $formations = DB::table("formations")
            ->join("identite_formations", "formations.id", "identite_formations.formation_id")
            ->where("identite_id", $id)
            ->get();

        $post_docs = DB::table("post_docs")
            ->join("identite_post_docs", "post_docs.id", "identite_post_docs.post_doc_id")
            ->where("identite_id", $id)
            ->get();

        $axes = DB::table("axe_recherches")
            ->join("identite_axe_recherches", "axe_recherches.id", "identite_axe_recherches.axe_recherche_id")
            ->where("identite_id", $id)
            ->get();


        $actions = DB::table("action_recherches")
            ->join("identite_action_recherches", "action_recherches.id", "identite_action_recherches.action_recherche_id")
            ->where("identite_id", $id)
            ->get();

        $projets = DB::table("projet_tutores")
            ->join("identite_projet_tutores", "projet_tutores.id", "identite_projet_tutores.projet_tutore_id")
            ->join("niveau_etude", "projet_tutores.niveau_etude_id", "niveau_etude.id")
            ->where("identite_id", $id)
            ->get();

        $communications = DB::table("production_scientifiques")
            ->join("type_production_scientifiques", "production_scientifiques.type_production_scientifique_id", "type_production_scientifiques.id")
            ->where("identite_id", $id)
            ->where("type_production_scientifique_id", 1)
            ->get();


        $articles = DB::table("production_scientifiques")
            ->join("type_production_scientifiques", "production_scientifiques.type_production_scientifique_id", "type_production_scientifiques.id")
            ->where("identite_id", $id)
            ->where("type_production_scientifique_id", 2)
            ->get();

        $ouvrages = DB::table("production_scientifiques")
            ->join("type_production_scientifiques", "production_scientifiques.type_production_scientifique_id", "type_production_scientifiques.id")
            ->where("identite_id", $id)
            ->where("type_production_scientifique_id", 3)
            ->get();


        return view("fiche", compact("data", "formations", "post_docs", "axes", "projets", "actions", "communications", "articles", "ouvrages"));
    }

    public function liste()
    {
        return view("liste");
    }

    public function store_recherche_liste(Request $request)
    {

        if(isset($request->ile) && empty($request->etablissement) && empty($request->profession))
        {
            
            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->where("identites.ile_id", $request->ile)
                ->get();

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }

        if(isset($request->ile) && isset($request->profession) && empty($request->etablissement) )
        {
            
            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->where("identites.ile_id", $request->ile)
                ->where("profession_id", $request->profession)
                ->get();

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }

        if(isset($request->ile) && isset($request->etablissement) && empty($request->profession))
        {
            
            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->where("identites.ile_id", $request->ile)
                ->where("identites.etablissement_id", $request->etablissement)
                ->get();

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }


        if (isset($request->etablissement) && empty($request->$request->ile) && empty($request->profession))  {

            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->where("identites.etablissement_id", $request->etablissement)
                ->get();

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }

       
        if (isset($request->profession) && empty($request->$request->ile) && empty($request->etablissement)) {

            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->where("profession_id", $request->profession)
                ->get();

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }

        
        if (isset($request->etablissement) && isset($request->profession) && empty($request->$request->ile)) {

            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->where("identites.profession_id", $request->profession)
                ->where("identites.etablissement_id", $request->etablissement)
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->get();

              

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }

        if (isset($request->ile) && isset($request->etablissement) && isset($request->profession)) 
        {
            $datas = DB::table("identites")
                ->join("etablissements", "etablissements.id", "identites.etablissement_id")
                ->join("professions", "professions.id", "identites.profession_id")
                ->select("identites.*", "etablissements.code as etablissement", "professions.designation as profession")
                ->where("identites.ile_id", $request->ile)
                ->where("identites.etablissement_id", $request->etablissement)
                ->where("profession_id", $request->profession)
                ->get();

            if (count($datas) > 0) {
                return view("liste", compact("datas"));
            } else {
                return back()->with("error", "Il n'y pas eu d'enregistrement");
            }
        }
    }
}
