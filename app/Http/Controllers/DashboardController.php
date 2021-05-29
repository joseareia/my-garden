<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\GeneralSensor;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $general_sensor = GeneralSensor::orderBy("created_at", "DESC")->take(1)->first();
        $cenoura = Plant::where("name", "cenouras")->orderBy("created_at", "DESC")->take(1)->first();
        $alface = Plant::where("name", "alfaces")->orderBy("created_at", "DESC")->take(1)->first();
        $tomate = Plant::where("name", "tomates")->orderBy("created_at", "DESC")->take(1)->first();
        $plants = array($cenoura, $alface, $tomate);
        return view('dashboard', compact('plants', 'general_sensor'));
    }
}