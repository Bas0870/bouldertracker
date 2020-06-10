<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettings extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'current_password' => 'nullable|required_with:new_password|password',
            'new_password' => 'nullable|string|min:8|confirmed',
        ];
    }
}
