<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // honeypot – bot vyplní skryté pole
        if ($request->filled('website')) {
            return redirect(route('home') . '#kontakt');
        }

        $data = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
            'consent' => ['accepted'],
        ]);

        Mail::to('info@autoskolavrana.cz')->send(new ContactMessage($data));

        return redirect(route('home') . '#kontakt')
            ->with('contact_success', true);    }
}
