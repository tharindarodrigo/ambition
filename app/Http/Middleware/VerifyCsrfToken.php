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

        'user/achievements/store',
        'user/achievements/delete',

        'user/educational-goals/store',
        'user/educational-goals/delete',

        'user/educational-goals/store',
        'user/educational-goals/delete',

        'user/professional-skills/store',
        'user/professional-skills/delete',

        'user/languages/store',
        'user/languages/delete',

        'user/schools/store',
        'user/schools/delete',

        'user/lived-places/store',
        'user/lived-places/delete',

        'user/degree/store',
        'user/degree/store',

        'user/degree/delete',
        'user/degree/delete',

    ];
}
