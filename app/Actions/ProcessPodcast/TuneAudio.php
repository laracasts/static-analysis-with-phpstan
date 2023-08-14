<?php

namespace App\Actions\ProcessPodcast;

/**
 * Make adjustments to the given audio file in
 * preparation for publishing and return the
 * path to the modified file.
 */
class TuneAudio
{
    /**
    * @param non-empty-string $path
    * @param int<1, 200> $volume
    * @param int<1, max> $speed
    * @return non-empty-string
     */
    public function __invoke(
        string $path,
        int $volume = 100,
        int $speed = 100
    ): string {
        return 'foo';
    }
}
