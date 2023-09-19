<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required',
            'username' => ['required', Rule::unique(User::class)->ignore($this->user_id)],
            'new_password' => ['string', 'max:255', 'min:6'],
            'image' => ['image', 'mimes:jpg,png,jpeg,gif,svg,webm'],
            'role_id' => ['required', 'integer', 'exists:roles,id']
        ];
    }
}
