<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SPPRequest extends FormRequest
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
            'title' => 'sometimes|required|string|unique:spp,title',
            'body' => 'sometimes|required|string',
            'image' => 'sometimes|required|image|max:2048',
            'type' => 'sometimes|required|string'
        ];
    }
}
