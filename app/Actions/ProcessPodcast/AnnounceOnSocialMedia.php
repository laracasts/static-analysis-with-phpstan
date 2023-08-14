<?php

namespace App\Actions\ProcessPodcast;

use App\Services\SocialMedia\Contracts\SocialMediaPlatform;
use App\Services\SocialMedia\Result;

class AnnounceOnSocialMedia
{
    public function __invoke(string $path, string $platform): Result
    {
        return app($platform)->post('A new episode of my podcast is now available!');
    }
}
