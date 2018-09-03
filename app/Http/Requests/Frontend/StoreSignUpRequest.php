<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSignUpRequest extends FormRequest
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
            'type' => 'required|string|'.Rule::in('participant', 'sponsor', 'visitor'),
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'company' => 'nullable|string',
            'email' => 'required|string|email',
            'over_eighteen' => 'nullable|boolean',
            'privacy' => 'accepted',
        ];
    }
}
