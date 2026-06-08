<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactInquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => is_string($this->name) ? trim($this->name) : $this->name,
            'email' => is_string($this->email) ? trim($this->email) : $this->email,
            'phone' => is_string($this->phone) ? trim($this->phone) : $this->phone,
            'message' => is_string($this->message) ? trim($this->message) : $this->message,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'required_without:phone', Rule::email()->rfcCompliant(), 'max:255'],
            'phone' => ['nullable', 'required_without:email', 'string', 'max:40'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.max' => 'Your name must be 255 characters or fewer.',
            'email.required_without' => 'Please provide an email address or phone number.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email address must be 255 characters or fewer.',
            'phone.required_without' => 'Please provide a phone number or email address.',
            'phone.max' => 'Your phone number must be 40 characters or fewer.',
            'message.required' => 'Please tell us how we can help.',
            'message.max' => 'Your message must be 5,000 characters or fewer.',
        ];
    }
}
