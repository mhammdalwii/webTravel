<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Boat;

class BoatController extends Controller
{
    public function superior()
    {
        $boats = Boat::where('category', 'Superior')->get();
        return view('boats.index', compact('boats'))->with('selectedCategory', 'Superior');
    }

    public function deluxe()
    {
        $boats = Boat::where('category', 'Deluxe')->get();
        return view('boats.index', compact('boats'))->with('selectedCategory', 'Deluxe');
    }

    public function luxury()
    {
        $boats = Boat::where('category', 'Luxury')->get();
        return view('boats.index', compact('boats'))->with('selectedCategory', 'Luxury');
    }

    public function filterByCategory($category)
    {
        $boats = Boat::where('category', $category)->get();
        return view('boats.index', compact('boats'))->with('category', $category);
    }
    // Method untuk filter berdasarkan departure
    public function filterByDeparture($departure)
    {
        $boats = Boat::whereJsonContains('departure', $departure)->get();
        return view('boats.index', compact('boats'))->with('selectedDeparture', $departure);
    }
    public function index(Request $request)
    {
        $category = $request->query('category', null);
        $departure = $request->query('departure', null);

        $query = Boat::query();

        if ($category && $category !== 'All') {
            $query->where('category', $category);
        }

        if ($departure && $departure !== 'All') {
            $query->where('departure', 'LIKE', "%$departure%");
        }

        $boats = $query->get();

        return view('boats.index', compact('boats', 'category', 'departure'));
    }
}
