<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get("/du-an", [ProjectController::class, "index"])->name("project");


require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('Project');
});