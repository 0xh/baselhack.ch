<?php

namespace App\Http\Requests\Frontend;

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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'over_eighteen' => 'required|boolean',
            'privacy' => 'accepted',
            'g-recaptcha-response' => 'required|recaptcha',

        ];
    }
}
