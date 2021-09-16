<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishingSpot;

class IndexController extends Controller
{
    public function index() {
        $FishingSpots = FishingSpot::latest('updated_at')->get();

        return view('index')->with(['fishingSpots' => $FishingSpots]);
    }

    // public function search() {

    // }
}
