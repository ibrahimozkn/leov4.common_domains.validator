<?php

namespace App\Http\Requests\ValidationKey;

use App\Http\Requests\AbstractFormRequest;
class ValidationKeyCreateRequest extends AbstractFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'domain' => 'required|url'
        ];
    }
}
