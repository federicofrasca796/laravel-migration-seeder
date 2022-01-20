<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $packages = Package::paginate(9);
        // ddd($packages);
        return view('trips.index', compact('packages'));
    }

    public function show(Package $trip)
    {
        // ddd($trip);
        return view('trips.show', compact('trip'));
    }
}