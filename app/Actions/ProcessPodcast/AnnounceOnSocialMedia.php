<?php

namespace App\Actions\ProcessPodcast;

use App\Services\SocialMedia\Contracts\SocialMediaPlatform;
use App\Services\SocialMedia\Result;
use App\Services\SocialMedia\Threads;

class AnnounceOnSocialMedia
{
    /**
     * @template TSocialMediaPlatform of SocialMediaPlatform
     *
     * @param  non-empty-string  $path
     * @param  class-string<TSocialMediaPlatform>  $platform
     * @return Result<TSocialMediaPlatform>
     */
    public function __invoke(string $path, string $platform): Result
    {
        return app($platform)->post('A new episode of my podcast is now available!');
    }
}
