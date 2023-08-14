<?php

namespace App\Services\SocialMedia\Contracts;

use App\Services\SocialMedia\Result;

interface SocialMediaPlatform
{
    public function post(string $content): Result;
}
