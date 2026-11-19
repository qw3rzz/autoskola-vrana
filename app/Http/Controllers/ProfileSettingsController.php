<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProfileSettingsRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;

/** Sekce "O mně" na webu (nezaměňovat s ProfileController = účet přihlášeného uživatele). */
class ProfileSettingsController extends Controller
{
    public function update(ProfileSettingsRequest $request): RedirectResponse
    {
        // Když profil ještě neexistuje, vytvoří se nový (původně to padalo na null).
        $profile = Profile::firstOrNew();
        $profile->fill($request->data());

        if ($request->hasFile('photo')) {
            $profile->setPhoto($request->file('photo'));
        }

        $profile->save();

        return back()->with('status', 'Sekce "O mně" byla upravena.');
    }
}
