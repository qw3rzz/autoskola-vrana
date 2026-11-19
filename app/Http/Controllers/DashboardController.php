<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Profile;
use App\Models\Review;
use App\Models\Vehicle;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard', [
            'profile' => Profile::first(),
            'instructors' => Instructor::orderBy('created_at')->get(),
            'vehicles' => Vehicle::orderBy('created_at')->get(),
            'reviews' => Review::latest()->get(),
        ]);
    }
}
