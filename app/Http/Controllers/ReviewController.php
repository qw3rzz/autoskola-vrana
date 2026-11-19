<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request): RedirectResponse
    {
        Review::create($request->data());

        return back()->with('status', 'Recenze byla přidána.');
    }

    public function update(ReviewRequest $request, Review $review): RedirectResponse
    {
        $review->update($request->data());

        return back()->with('status', 'Recenze byla upravena.');
    }

    public function destroy(Review $review): RedirectResponse
    {
        $review->delete();

        return back()->with('status', 'Recenze byla smazána.');
    }
}
