<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\ConfiguracaoSite;


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

        // Compartilha as configurações gerais do site
        if (Schema::hasTable('tbl_configuracao_site')) {

            $configuracao = ConfiguracaoSite::where('id_configuracao', 1)->first();

            view()->share('configuracao', $configuracao);

        }

     

    }
}