<?php

use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $services = Service::all();

    $user = User::find(1);

    $data = [
        'title' => 'Resume Page Application',
        'name' => $user->name
    ];
    return view('index', ['data' => $data, 'services' => $services]);
});

Route::get('/login', function () {
     return view('login');
});

Route::get('/dashboard', function () {

    $user = User::find(1);

    $data = [
        'title' => 'Resume Page Application',
        'name' => $user->name
    ];
    return view('admin.pages.dashcontent', $data);
});

Route::get('/about', function () {


    return view('admin.pages.about');
});
