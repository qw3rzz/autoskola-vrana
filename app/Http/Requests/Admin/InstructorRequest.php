<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // přístup hlídá middleware 'auth'
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:60'],
            'role' => ['nullable', 'string', 'max:50'],
            'bio' => ['nullable', 'string', 'max:300'],
            'photo' => ['nullable', 'image', 'max:5120'], // max 5 MB
        ];
    }

    /** Data pro model (bez fotky, s výchozí rolí). */
    public function data(): array
    {
        $data = $this->safe()->except('photo');
        $data['role'] = $data['role'] ?? 'Instruktor';

        return $data;
    }
}
