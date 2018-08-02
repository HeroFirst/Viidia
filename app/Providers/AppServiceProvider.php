<?php

namespace App\Providers;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViidiaController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = ViidiaController::getSettings();
        view()->share(['setting'=>$settings]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
