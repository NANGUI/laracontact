<?php

namespace App\Providers;

use App\Model\Group;
use App\Model\Contact;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        // Taille par défaut des chaînes
        Schema::defaultStringLength(191);
        Blade::component('components.alert', 'alert');
        View::share('group_number', Group::all()->count());
        View::share('contact_number', Contact::all()->count());
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
