<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class administrateurController extends Controller
{
    //

    public function add_etablissement ()
    {
        $datas=DB::table("etablissements")->get();

        return view("add-etablissement",compact("datas"));
    }

    public function store_add_etablissement (Request $request)
    {

        $request->validate([
            "code"=>"required|unique:etablissements",
            "designation"=>"required|unique:etablissements",
        ]);

        DB::table("etablissements")->insert([
            "code"=>$request->code,
            "designation"=>$request->designation,
        ]);

        return redirect('add-etablissement');
    }

    public function add_grade()
    {
        $datas=DB::table("grades")->get();

        return view("add-grade",compact("datas"));
    }

    public function store_add_grade(Request $request)
    {
        $request->validate([
            "code"=>"required|unique:grades",
            "designation"=>"required|unique:grades",
        ]);

        DB::table("grades")->insert([
            "code"=>$request->code,
            "designation"=>$request->designation,
        ]);

        return redirect('add-grade');
    }

    public function add_profession()
    {
        $datas=DB::table("professions")->get();
        return view("add-profession",compact("datas"));
    }

    public function store_add_profession(Request $request)
    {
        $request->validate([
            "code"=>"required|unique:professions",
            "designation"=>"required|unique:professions",
        ]);

        DB::table("professions")->insert([
            "code"=>$request->code,
            "designation"=>$request->designation,
        ]);

        return redirect('add-profession');
    }
}
