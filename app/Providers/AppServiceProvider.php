<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;// constei manualmente, e linha 27 também

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); // Constei pois estou com erro ao executar o comando php artisan migrate:fresh
        //fonte: https://mateusantunes.com/syntax-error-or-access-violation-1071-specified-key-was-too-long/
    }
}
