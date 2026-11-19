<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:60'],
            'role' => ['required', 'string', 'max:60'],
            'phone' => ['nullable', 'string', 'max:30'],
            'bio' => ['nullable', 'string', 'max:300'],
            'photo' => ['nullable', 'image', 'max:5120'],
        ];
    }

    public function data(): array
    {
        return $this->safe()->except('photo');
    }
}
