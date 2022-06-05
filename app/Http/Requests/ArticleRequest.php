<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Later this will use Gate or policies 
        // to authorize users role and permission
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
         if (in_array($this->method(), ['PUT', 'PATCH'])) return $this->updateRules();

         return $this->storeRules();
    }

    protected function storeRules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'title' => 'required|unique:articles',
            'body' => 'required',
            'slug' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    protected function updateRules()
    {
        return [
            'user_id' => 'sometimes|required|exists:users,id',
            'title' => 'sometimes|required',
            'body' => 'sometimes|required',
            'slug' => 'sometimes|required|string',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
