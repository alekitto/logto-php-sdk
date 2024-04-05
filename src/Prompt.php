<?php

namespace Logto\Sdk;

/**
 * The prompt parameter for the OpenID Connect authorization request.
 */
enum Prompt: string
{
    /** The user will be able to reuse the existing consent without being prompted for sign-in again. */
    case consent = 'consent';
    /** The user will be prompted for sign-in again anyway. Note there will be no Refresh Token returned in this case. */
    case login = 'login';
}
