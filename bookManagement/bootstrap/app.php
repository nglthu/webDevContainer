<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )


    ->withMiddleware(function (Middleware $middleware) {

        if (env('APP_ENV') == 'production') {
            $middleware->trustProxies(at: [
            '*',
            'https://friendly-space-telegram-q7qv4xrx7wwf4wwv-9999.app.github.dev/build/assets/app-Bf4POITK.js',
            
        
            ],
        
        );
        }
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
