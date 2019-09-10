<?php

namespace App\Resolvers;

use App\Models\Auth\SocialAccount;
use App\Models\Auth\User;
use App\Repositories\Frontend\Auth\UserRepository;
use Coderello\SocialGrant\Resolvers\SocialUserResolverInterface;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Facades\Socialite;

class SocialUserResolver implements SocialUserResolverInterface
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * SocialLoginController constructor.
     *
     * @param UserRepository  $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Resolve user by provider credentials.
     *
     * @param string $provider
     * @param string $accessToken
     *
     * @return Authenticatable|null
     */
    public function resolveUserByProviderCredentials(string $provider, string $accessToken): ?Authenticatable
    {
        // Return the user that corresponds to provided credentials.
        // If the credentials are invalid, then return NULL.
        $account = Socialite::driver($provider)->userFromToken($accessToken);
        $user = $this->userRepository->findOrCreateProvider($account,$provider);
        return $user;

    }
}