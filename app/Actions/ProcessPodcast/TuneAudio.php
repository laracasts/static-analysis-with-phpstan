<?php

namespace App\Actions\ProcessPodcast;

/**
 * Make adjustments to the given audio file in
 * preparation for publishing and return the
 * path to the modified file.
 */
class TuneAudio
{
    public function __invoke(
        string $path,
        int $volume = 100,
        int $speed = 100
    ): string {
    }
}
