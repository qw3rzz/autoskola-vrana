<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Vehicle;
use App\Models\Review;
use Illuminate\Http\Request;
Use App\Models\Profile;

class AdminController extends Controller
{
    public function dashboard()
    {
        $profile = Profile::first();
        $instructors = Instructor::orderBy('created_at')->get();
        $vehicles = Vehicle::orderBy('created_at')->get();
        $reviews = Review::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('profile', 'instructors', 'vehicles', 'reviews'));
    }

    // --- INSTRUKTOŘI ---

    public function storeInstructor(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'role' => ['nullable', 'string', 'max:50'],
            'bio' => ['nullable', 'string', 'max:300'],
            'photo' => ['nullable', 'image', 'max:5120'], // max 5 MB
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('instructors', 'public');
        }

        Instructor::create([
            'name' => $validated['name'],
            'role' => $validated['role'] ?? 'Instruktor',
            'bio' => $validated['bio'] ?? null,
            'photo_path' => $photoPath,
        ]);

        return back()->with('status', 'Instruktor byl přidán.');
    }

    public function updateInstructor(Request $request, Instructor $instructor)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'role' => ['nullable', 'string', 'max:50'],
            'bio' => ['nullable', 'string', 'max:300'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo_path'] = $request->file('photo')->store('instructors', 'public');
        }

        $instructor->update($validated);

        return back()->with('status', 'Instruktor byl upraven.');
    }

    public function destroyInstructor(Instructor $instructor)
    {
        $instructor->delete();

        return back()->with('status', 'Instruktor byl smazán.');
    }

    // --- VOZY ---

    public function storeVehicle(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:40'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('vehicles', 'public');
        }

        Vehicle::create([
            'name' => $validated['name'],
            'photo_path' => $photoPath,
        ]);

        return back()->with('status', 'Vůz byl přidán.');
    }

    public function updateVehicle(Request $request, Vehicle $vehicle)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:40'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo_path'] = $request->file('photo')->store('vehicles', 'public');
        }

        $vehicle->update($validated);

        return back()->with('status', 'Vůz byl upraven.');
    }

    public function destroyVehicle(Vehicle $vehicle)
    {
        $vehicle->delete();

        return back()->with('status', 'Vůz byl smazán.');
    }

    // --- RECENZE ---

    public function storeReview(Request $request)
    {
        $validated = $request->validate([
            'author_name' => ['required', 'string', 'max:40'],
            'text' => ['required', 'string', 'max:280'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        Review::create([
            'author_name' => $validated['author_name'],
            'text' => $validated['text'],
            'is_published' => $request->boolean('is_published'),
        ]);

        return back()->with('status', 'Recenze byla přidána.');
    }

    public function updateReview(Request $request, Review $review)
    {
        $validated = $request->validate([
            'author_name' => ['required', 'string', 'max:40'],
            'text' => ['required', 'string', 'max:280'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $review->update([
            'author_name' => $validated['author_name'],
            'text' => $validated['text'],
            'is_published' => $request->boolean('is_published'),
        ]);

        return back()->with('status', 'Recenze byla upravena.');
    }

    public function destroyReview(Review $review)
    {
        $review->delete();

        return back()->with('status', 'Recenze byla smazána.');
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'role' => ['required', 'string', 'max:60'],
            'phone' => ['nullable', 'string', 'max:30'],
            'bio' => ['nullable', 'string', 'max:300'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ]);

        $profile = Profile::first();

        if ($request->hasFile('photo')) {
            $validated['photo_path'] = $request->file('photo')->store('profile', 'public');
        }

        $profile->update($validated);

        return back()->with('status', 'Sekce "O mně" byla upravena.');
    }
}
