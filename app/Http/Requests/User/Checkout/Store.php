<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:users,email,' . Auth::id() . ',id',
            'email' => 'required|email',
            'occupation' => 'required|string',
            'card_number' => 'required|numeric|digits_between:8,16',
            'expired' => 'required|date_format:Y-m|after_or_equal:' . date(now()->format('Y-m')),
            'cvc' => 'required|numeric|digits:3',
        ];
    }
}