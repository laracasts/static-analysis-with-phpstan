<?php

namespace App\Actions\ProcessPodcast;

use App\Enums\PodcastPlatform;
use Closure;

/**
 * Upload the finished podcast to the specified podcast platforms.
 *
 * A callback should be provided, which will be called throughout the
 * upload process and will be passed the current progress percentage.
 * Returning false from the callback will cancel the upload.
 */
class UploadToPodcastPlatforms
{
    /**
    * @param non-empty-string $path
    * @param list<PodcastPlatform> $podcastPlatforms
    * @param Closure(int): (bool|null) $progressCallback
     */
    public function __invoke(
        string $path,
        array $podcastPlatforms,
        Closure $progressCallback,
    ): void {
    }
}
