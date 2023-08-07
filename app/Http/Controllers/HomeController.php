<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        $config = [
            'theme' => 'light',
            'language' => 'en',
            'timezone' => 'Z',
        ];

        $response = fn($config, $name) => view('home')->with([
            'name' => $name,
            'config' => $config,
        ]);

        $user = $request->user();
        assert($user instanceof User);

        if (!$user->config) {
            return $response($config, $user->name);
        }

        $fileContent = Storage::get($user->config);

        if (!$fileContent) {
            return $response($config, $user->name);
        }

        $json = json_decode($fileContent, true);

        if (! is_array($json)) {
            return $response($config, $user->name);
        }

        $config = array_merge($config, $json);

        return $response($config, $user->name);
    }
}
