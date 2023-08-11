<?php

namespace App\Actions\ProcessPodcast;

/**
 * Join the given audio clips together in the order
 * they were received and return the path to the
 * joined audio file.
 */
class JoinClips
{
    public function __invoke(
        array $clips,
        array $options = []
    ): string {
    }
}
