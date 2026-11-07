<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\Artisan;

Route::get('/init-db', function () {
    Artisan::call('migrate:fresh', ['--force' => true]);
    Artisan::call('db:seed', ['--class' => 'VisitorSeeder', '--force' => true]);
    return 'Database migration and seeding completed successfully!';
});
