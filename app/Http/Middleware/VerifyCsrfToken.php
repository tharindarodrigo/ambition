<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'user-profile/update',
        'user/employment/store',
        'user/employment/delete',

        'user/interests/update',
        'user/interests/store',
        'user/interests/delete',

        'user/memberships/store',
        'user/memberships/delete',


    ];
}
