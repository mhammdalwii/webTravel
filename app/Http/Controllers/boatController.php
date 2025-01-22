<?php

namespace App\Http\Controllers;

use App\Models\Boat;

class BoatController extends Controller
{
    public function allCategories()
    {
        // Ambil semua data kapal dari database
        $boats = Boat::all();
        return view('boats.all-categories', compact('boats'));
    }
}
