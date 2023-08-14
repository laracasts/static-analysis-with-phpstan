<?php

namespace App\Services\SocialMedia;

use App\Services\SocialMedia\Contracts\SocialMediaPlatform;

class Threads implements SocialMediaPlatform
{
    public function post(string $content): Result
    {
        return new Result($this, 200);
    }
}
