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

        if (!$request->user()->config) {
            return $response($config, $request->user()->name);
        }

        $fileContent = Storage::get($request->user()->config);

        if (!$fileContent) {
            return $response($config, $request->user()->name);
        }

        $json = json_decode($fileContent, true);

        if (! is_array($json)) {
            return $response($config, $request->user()->name);
        }

        $config = array_merge($config, $json);

        return $response($config, $request->user()->name);
    }
}
