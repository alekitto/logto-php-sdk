<?php declare(strict_types=1);
namespace Logto\Sdk;

enum Prompt: string
{
  case consent = 'consent';
  case login = 'login';
}

class ClientConfig
{
  /**
   * @param string $endpoint The endpoint for the Logto server. See {@link LogtoConfig::$endpoint} for details.
   * @param string $appId The client ID of your application. See {@link LogtoConfig::$appId} for details.
   * @param string|null $appSecret The client secret of your application. See {@link LogtoConfig::$appSecret} for details.
   * @param array|null $scopes The scopes (permissions) that your application needs to access. See {@link LogtoConfig::$scopes} for details.
   * @param array|null $resources The API resources that your application needs to access. See {@link LogtoConfig::$resources} for details.
   * @param Prompt $prompt The prompt parameter for the OpenID Connect authorization request. See {@link LogtoConfig::$prompt} for details.
   */
  public function __construct(
    /**
     * The endpoint for the Logto server, you can get it from the integration guide
     * or the team settings page of the Logto Console.
     *
     * @example https://foo.logto.app
     */
    public string $endpoint,
    /**
     * The client ID of your application, you can get it from the integration guide
     * or the application details page of the Logto Console.
     */
    public string $appId,
    /**
     * The client secret of your application, you can get it from the application
     * details page of the Logto Console.
     */
    public ?string $appSecret = null,
    /**
     * The scopes (permissions) that your application needs to access.
     * Scopes that will be added by default: `openid`, `offline_access` and `profile`.
     *
     * If resources are specified, scopes will be applied to every resource.
     *
     * @see {@link https://docs.logto.io/docs/recipes/integrate-logto/vanilla-js/#fetch-user-information | Fetch user information}
     * for more information of available scopes for user information.
     */
    public ?array $scopes = null,
    /**
     * The API resources that your application needs to access. You can specify
     * multiple resources by providing an array of strings.
     *
     * @see {@link https://docs.logto.io/docs/recipes/rbac/ | RBAC} to learn more about how to use role-based access control (RBAC) to protect API resources.
     */
    public ?array $resources = null,
    /**
     * The prompt parameter for the OpenID Connect authorization request.
     * 
     * - If the value is `consent`, the user will be able to reuse the existing consent without being prompted for sign-in again.
     * - If the value is `login`, the user will be prompted for sign-in again anyway. Note there will be no Refresh Token returned in this case.
     */
    public Prompt $prompt = Prompt::consent,
  ) {
  }
}
