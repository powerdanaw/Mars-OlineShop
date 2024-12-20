<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., \+]+$/u',
            'title' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., \+]+$/u',
            'cat_id' => 'required|min:1|max:100000000|regex:/^[0-9 \ +]+$/u',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:webp,png,jpg,jpeg,gif',
            'inventory' => 'required|numeric',
            'description' => 'required',
        ];
    }
}
