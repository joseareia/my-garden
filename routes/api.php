<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantsController;

Route::get('plants', [PlantsController::class, 'index']);
Route::post('plants', [PlantsController::class, 'store']);

//query for test -> name=cenouras&temperature=32&luminosity=67&humidity=3&light=0&watering=1&photo=webcam.png
