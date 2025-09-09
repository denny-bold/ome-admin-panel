<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStreamRequest extends FormRequest
{
    public function authorize() { return true; }
    public function rules()
    {
        return [
            'name'    => 'required|string',
            'type'    => 'required|string',
            'options' => 'nullable|array',
        ];
    }
}
