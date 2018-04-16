<?php

namespace App\Http\Requests\Users\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        $user = Auth::user();

        return [
            'name' => 'required|string|max:255',
            'redirect_email' => 'required|string|email|max:255|unique:users,redirect_email,'.$user->id,
        ];
    }
}
