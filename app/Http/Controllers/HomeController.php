<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $config = [
            'theme' => 'dark',
            'language' => 'en',
            'timezone' => 'Z',
        ];

        if ($request->user()->hasConfigFile()) {
            $fileContent = Storage::get($request->user()->config);
            $config = [...$config, ...json_decode($fileContent, true)];
        }

        return view('home')->with([
            'name' => $request->user()->name,
            'config' => $config,
        ]);
    }
}
