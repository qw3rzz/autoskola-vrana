<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:40'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ];
    }

    public function data(): array
    {
        return $this->safe()->except('photo');
    }
}
