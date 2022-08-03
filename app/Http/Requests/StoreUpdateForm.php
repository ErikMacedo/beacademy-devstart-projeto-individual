<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateForm extends FormRequest
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
        $rules = [
            'image_products' => [
                'image',
                'mimes:png,jpeg,jpg,svg,gif,bmp',
                'max:2048',
            ],

        ];

        if ($this->method('PUT')) {
            $rules['image_products'] = [
                'mimes:png,jpeg,jpg,svg,gif,bmp',
            ];
        }
        return $rules;
    }
}
