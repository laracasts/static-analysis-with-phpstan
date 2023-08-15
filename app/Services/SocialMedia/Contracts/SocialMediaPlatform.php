<?php

namespace App\Services\SocialMedia\Contracts;

use App\Services\SocialMedia\Result;

interface SocialMediaPlatform
{
    /**
     * @return Result<static>
     */
    public function post(string $content): Result;
}
