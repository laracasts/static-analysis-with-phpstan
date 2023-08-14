<?php

namespace App\Actions\ProcessPodcast;

/**
 * Join the given audio clips together in the order
 * they were received and return the path to the
 * joined audio file.
 */
class JoinClips
{
    /**
    * @param list<non-empty-string> $clips
    * @param array{type?: 'sequential'|'parallel', crossfade?: bool} $options
    * @return non-empty-string
     */
    public function __invoke(
        array $clips,
        array $options = []
    ): string {
        return 'foo';
    }
}
