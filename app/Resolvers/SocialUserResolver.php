<?php

namespace App\Resolvers;

use App\Models\Auth\SocialAccount;
use App\Models\Auth\User;
use Coderello\SocialGrant\Resolvers\SocialUserResolverInterface;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Facades\Socialite;

class SocialUserResolver implements SocialUserResolverInterface
{
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
        $social_account = SocialAccount::where('provider','=',$provider)->where('token','=',$accessToken)->first();
        if( $social_account ){
            return User::find($social_account->user_id);
        }else{
            return NULL;
        }

    }
}