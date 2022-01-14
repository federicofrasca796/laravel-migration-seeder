<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function trips()
    {
        $packages = Package::all();
        // ddd($packages);
        return view('trips', compact('packages'));
    }
}