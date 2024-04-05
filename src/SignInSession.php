<?php

namespace Logto\Sdk;

/**
 * The sign-in session that stores the information for the sign-in callback.
 * Should be stored before redirecting the user to Logto.
 */
class SignInSession
{
    function __construct(
        /** The redirect URI for the current sign-in session. */
        public string $redirectUri,
        /** The code verifier of Proof Key for Code Exchange (PKCE). */
        public string $codeVerifier,
        /** The state for OAuth 2.0 authorization request. */
        public string $state,
    ) {
    }
}
