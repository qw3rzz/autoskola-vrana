<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'author_name' => ['required', 'string', 'max:40'],
            'text' => ['required', 'string', 'max:280'],
            'is_published' => ['nullable', 'boolean'],
        ];
    }

    public function data(): array
    {
        return [
            'author_name' => $this->validated('author_name'),
            'text' => $this->validated('text'),
            'is_published' => $this->boolean('is_published'),
        ];
    }
}
