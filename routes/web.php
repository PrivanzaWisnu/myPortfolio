<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/home', function () {
    $path = resource_path('data/projects.json');
    $json = File::exists($path) ? File::get($path) : '{}';
    $projects = json_decode($json, true);
    return view('home', ['projects' => $projects]);
});

Route::get('/experienceshowcase', function () {
    $path = resource_path('data/expsc.json');
    $json = File::exists($path) ? File::get($path) : '{}';
    $expsc = json_decode($json, true);
    return view('experienceShowcase', ['expsc' => $expsc]);
});
