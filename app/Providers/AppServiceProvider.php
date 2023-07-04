<?php

namespace App\Providers;

use App\Models\identite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
      
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        // $id=Auth::id();
        // $user=DB::table("identites")
        // ->where("user_id",$id)
        // ->orderByDesc("identites.id")
        // ->first();
        // // $user=identite::where("user_id",$user)->first();

        // view()->share("user",$user);
       
    }
}
