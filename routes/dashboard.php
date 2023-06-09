<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Inertia\Inertia;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->get('/', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::resource('skills', SkillController::class)
    ->except(['create', 'edit', 'show']);
Route::resource('projects', ProjectController::class)
    ->except(['create', 'edit', 'show']);

