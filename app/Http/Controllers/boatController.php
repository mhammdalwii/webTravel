<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Boat;

class BoatController extends Controller
{
    public function allCategories(Request $request)
    {
        $category = $request->query('category', 'all');

        if ($category === 'all') {
            $boats = Boat::all();
        } else {
            $boats = Boat::where('category', $category)->get();
        }

        return view('boats.all-categories', compact('boats'));
    }

    public function luxuryCategory()
    {
        // Ambil semua kapal dengan kategori Luxury
        $boats = Boat::where('category', 'Luxury')->get();

        // Return ke view dengan data kapal
        return view('boats.luxury-category', compact('boats'));
    }

    public function show($id)
    {
        $boat = Boat::findOrFail($id);
        return view('boat-detail', compact('boat'));
    }
}
