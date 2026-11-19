<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\InstructorRequest;
use App\Models\Instructor;
use Illuminate\Http\RedirectResponse;

class InstructorController extends Controller
{
    public function store(InstructorRequest $request): RedirectResponse
    {
        $instructor = new Instructor($request->data());

        if ($request->hasFile('photo')) {
            $instructor->setPhoto($request->file('photo'));
        }

        $instructor->save();

        return back()->with('status', 'Instruktor byl přidán.');
    }

    public function update(InstructorRequest $request, Instructor $instructor): RedirectResponse
    {
        $instructor->fill($request->data());

        if ($request->hasFile('photo')) {
            $instructor->setPhoto($request->file('photo'));
        }

        $instructor->save();

        return back()->with('status', 'Instruktor byl upraven.');
    }

    public function destroy(Instructor $instructor): RedirectResponse
    {
        $instructor->delete(); // fotku smaže trait HasPhoto

        return back()->with('status', 'Instruktor byl smazán.');
    }
}
