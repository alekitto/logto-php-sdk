<?php

declare(strict_types=1);

namespace Logto\Sdk;

/**
 * The interaction mode for the sign-in request. Note this is not a part of the OIDC
 * specification, but a Logto extension.
 */
enum InteractionMode: string
{
    case signUp = 'signUp';
    case signIn = 'signIn';
}
