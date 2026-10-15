<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_name' => ['required', 'string', 'max:100'],
            'text' => ['required', 'string', 'max:1000'],
            'website' => ['max:0'], // honeypot – skryté pole, boti ho vyplní
        ]);

        Review::create([
            'author_name' => $validated['author_name'],
            'text' => $validated['text'],
            'is_published' => false, // vždy false, schvaluje admin
        ]);

        return back()->with('review_success', 'Díky za recenzi!');
    }
}
