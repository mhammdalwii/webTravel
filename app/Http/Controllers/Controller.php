<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Boat;



class Controller extends BaseController
{
    public function show($id)
    {
        $boat = Boat::findOrFail($id);
        return view('boat-detail', compact('boat'));
    }
}
