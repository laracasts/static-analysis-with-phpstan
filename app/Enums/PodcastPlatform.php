<?php

namespace App\Enums;

enum PodcastPlatform: string
{
    case Apple = 'apple';
    case Spotify = 'spotify';
    case Transistor = 'transistor';
    case SoundCloud = 'soundcloud';
}
