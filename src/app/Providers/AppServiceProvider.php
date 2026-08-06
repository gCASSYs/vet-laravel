<?php

namespace App\Providers;

use App\Models\ConfiguracaoSite;
use Illuminate\Support\ServiceProvider;

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
        $configuracao = ConfiguracaoSite::where('id_configuracao', 1)->first();

        view()->share('configuracao', $configuracao);
    }
}
