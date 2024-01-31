<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'course' => ['required', 'max:100', function ($attribute, $value, $fail) {
                if ($value == 'PHP') {
                    $fail('O campo' . $attribute . ' não pode ser ' . $value);
                }
            }],
            'workload' => ['required', 'integer'],
        ];
    }
}
