<?php

namespace App\Services\SocialMedia;

use App\Services\SocialMedia\Contracts\SocialMediaPlatform;

/**
 * @template-covariant TSocialMediaPlatform of SocialMediaPlatform
 */
readonly class Result
{
    /**
     * @param TSocialMediaPlatform $platform
     */
    public function __construct(
        public SocialMediaPlatform $platform,
        public int $statusCode
    ) {
    }
}
