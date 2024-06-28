<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
        'name'=>'required',
        'price'=>'required',
        'author'=>'required',
        'number_of_pages'=>'required',
        'category_id'=>'required',
        'description'=>'required',
        'discount'=>'required',
        'stock'=>'required',
        'image'=>'required',
        ];
    }
}
