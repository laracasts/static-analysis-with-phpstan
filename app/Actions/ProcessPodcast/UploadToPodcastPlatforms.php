<?php

namespace App\Actions\ProcessPodcast;

use Closure;

class UploadToPodcastPlatforms
{
    public function __invoke(
        string $path,
        array $podcastPlatforms,
        Closure $progressCallback,
    ): void {
    }
}
