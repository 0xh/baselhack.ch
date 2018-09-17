<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEnquiryRequest extends FormRequest
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
            'type' => 'required|string|'. Rule::in('general', 'event', 'sponsoring'),
            'company' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}
