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
<<<<<<< HEAD
        $middleware->redirectGuestsTo('/admin/dashboard');
=======
        //        
>>>>>>> c65e0d843097ef0d67539623dc0e448dde4b0f5b
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
