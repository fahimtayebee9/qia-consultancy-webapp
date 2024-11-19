<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

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
        Schema::defaultStringLength(191);

        if (URL::current() === url('/qiss-lab-demo')) {
            return redirect('/qiss-lab', 301)->send();
        } else if (URL::current() === url('/qiss-lab/marine-demo')) {
            return redirect('/qiss-lab/marine', 301)->send();
        }
    }
}
