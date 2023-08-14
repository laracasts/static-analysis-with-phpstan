<?php

namespace App\Services\SocialMedia;

use App\Services\SocialMedia\Contracts\SocialMediaPlatform;

readonly class Result
{
    public function __construct(
        public SocialMediaPlatform $platform,
        public int $statusCode
    ) {
    }
}
