<?php

namespace App\Actions\ProcessPodcast;

class TuneAudio
{
    public function __invoke(
        string $path,
        int $volume = 100,
        int $speed = 100
    ): string {
    }
}
