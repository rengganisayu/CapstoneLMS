<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Lainnya konfigurasi

    protected $routeMiddleware = [
        // Middleware lainnya
        'role' => \App\Http\Middleware\CheckRole::class,
    ];
    
}

