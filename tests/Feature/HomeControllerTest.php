<?php

use App\Models\User;
use function Pest\Laravel\be;

it('correctly loads user config', function () {
    $user = User::factory()->config(
        theme: 'dark',
        language: 'en',
        timezone: '-05:00'
    )->create();

    be($user)
        ->get(route('home'))
        ->assertViewHas('config', [
            'theme' => 'dark',
            'language' => 'en',
            'timezone' => '-05:00',
        ]);
});

it('correctly falls back to config defaults', function () {
    $user = User::factory()->create();

    be($user)
        ->get(route('home'))
        ->assertViewHas('config', [
            'theme' => 'light',
            'language' => 'en',
            'timezone' => 'Z',
        ]);
});
