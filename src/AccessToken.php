<?php

declare(strict_types=1);

namespace Logto\Sdk;

/** The access token class for a resource. */
class AccessToken
{
    function __construct(
        /** The access token string. */
        public string $token,
        /**
         * The timestamp (in seconds) when the access token will expire.
         * Note this is not the expiration time of the access token itself, but the
         * expiration time of the access token cache.
         */
        public int    $expiresAt,
    ) {
    }
}
