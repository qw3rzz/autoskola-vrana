<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Vehicle;
use App\Models\Review;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $instructors = Instructor::orderBy('created_at')->get();
        $vehicles = Vehicle::orderBy('created_at')->get();
        $reviews = Review::where('is_published', true)->orderBy('created_at', 'desc')->get();

        return view('home', compact('profile', 'instructors', 'vehicles', 'reviews'));
    }
}
