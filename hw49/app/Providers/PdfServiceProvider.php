<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PDF;

class PdfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('pdf-service', function() {
            return new \Mpdf\Mpdf();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
