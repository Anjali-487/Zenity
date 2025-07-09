<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        "/api_register",
        "/api_login",
        "/addorder",
        "/getorder",
        "/updateqty",
        "/removeorder",
        "/confirmorder",
        "/addbooking",
        "/confirmbooking",
        "/removebooking",
        "/api_getorderhis",
        '/book_therapist',
        "/api_applycoupon",
        "/api_edituser",
        
    ];
}
