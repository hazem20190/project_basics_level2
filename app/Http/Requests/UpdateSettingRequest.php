<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'address'       => 'string|required',
            'phone'         => 'string|required',
            'email'         => 'email|required',
            'facebook'      => 'url|required',
            'twitter'       => 'url|required',
            'yotube'        => 'url|required',
            'linkedin'      => 'url|required',
            'instagram'     => 'url|required'
        ];
    }
}
