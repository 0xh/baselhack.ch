<?php

namespace App\Http\Requests\Backend\Association\Members;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'mobile' => 'nullable|string|max:255',
            'github' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
            'member_since' => 'nullable|date',
        ];
    }
}
