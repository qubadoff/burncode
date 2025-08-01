<?php

namespace App\Http\Requests\Contact;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:20',
            'surname' => 'required|max:30',
            'email' => 'required|email|max:50|unique:contact_messages,email',
            'phone' => 'required|max:30|unique:contact_messages,phone',
            'body' => 'required|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required !',
            'name.max' => 'Name max 20 symbol !',
            'surname.required' => 'Surname is required !',
            'surname.max' => 'Surname max 30 symbol !',
            'email.required' => 'Email is required !',
            'email.email' => 'Email type incorrect !',
            'email.max' => 'Email max 50 symbol !',
            'email.unique' => 'This email is used !',
            'phone.required' => 'Phone is required !',
            'phone.max' => 'Phone max 30 symbol !',
            'phone.unique' => 'This phone number is used !',
            'body.required' => 'Message is required !',
            'body.max' => 'Message max 255 symbol !'
        ];
    }
}
