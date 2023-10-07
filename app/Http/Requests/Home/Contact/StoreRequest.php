<?php

namespace App\Http\Requests\Home\Contact;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => [
                'required',
                'max:100',
                'min:3',
            ],
            'email' => [
                'required',
                'email'
            ],
            'type' => [
                'sometimes',
                Rule::in(['new_project', 'improve_product', 'others'])
            ],
            'message' => [
                'required'
            ]
        ];
    }
}
