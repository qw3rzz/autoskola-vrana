<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\VehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;

class VehicleController extends Controller
{
    public function store(VehicleRequest $request): RedirectResponse
    {
        $vehicle = new Vehicle($request->data());

        if ($request->hasFile('photo')) {
            $vehicle->setPhoto($request->file('photo'));
        }

        $vehicle->save();

        return back()->with('status', 'Vůz byl přidán.');
    }

    public function update(VehicleRequest $request, Vehicle $vehicle): RedirectResponse
    {
        $vehicle->fill($request->data());

        if ($request->hasFile('photo')) {
            $vehicle->setPhoto($request->file('photo'));
        }

        $vehicle->save();

        return back()->with('status', 'Vůz byl upraven.');
    }

    public function destroy(Vehicle $vehicle): RedirectResponse
    {
        $vehicle->delete();

        return back()->with('status', 'Vůz byl smazán.');
    }
}
