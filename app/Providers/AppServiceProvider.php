<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        // social link and footer contact information
        $socialData = DB::table('socials')->first();
        $contactData = DB::table('contact_me')->first();

        View::share('socialData', $socialData);
        View::share('contactData', $contactData);
    }
}
