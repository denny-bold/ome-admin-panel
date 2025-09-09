<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChannelRequest extends FormRequest
{
    public function authorize() { return true; }
    public function rules()
    {
        return [
            'name'   => 'required|string',
            'kind'   => 'required|string',
            'config' => 'nullable|array',
        ];
    }
}
