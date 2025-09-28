<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $path = resource_path('data/projects.json');
    $json = File::exists($path) ? File::get($path) : '{}';
    $projects = json_decode($json, true);
    return view('home', ['projects' => $projects]);
});
