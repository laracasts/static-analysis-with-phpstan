<?php

namespace App\Jobs;

use App\Actions\ProcessPodcast\AnnounceOnSocialMedia;
use App\Actions\ProcessPodcast\JoinClips;
use App\Actions\ProcessPodcast\TuneAudio;
use App\Actions\ProcessPodcast\UploadToPodcastPlatforms;
use App\Enums\PodcastPlatform;
use App\Services\SocialMedia\TwitterOrXOrSomething;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(
        JoinClips $joinClips,
        TuneAudio $tuneAudio,
        UploadToPodcastPlatforms $uploadToPodcastPlatforms,
        AnnounceOnSocialMedia $announceOnSocialMedia,
    ): void {
        $path = $joinClips(
            ['clip1.mp3', 'clip2.mp3'],
            ['type' => 'sequential', 'crossfade' => false],
        );

        $path = $tuneAudio($path, 1, 1000);

        $uploadToPodcastPlatforms(
            $path,
            [PodcastPlatform::Apple, PodcastPlatform::SoundCloud],
            fn (int $progress) => true,
        );

        $response = $announceOnSocialMedia($path, TwitterOrXOrSomething::class);
    }
}
