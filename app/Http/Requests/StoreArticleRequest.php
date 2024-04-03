<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|max:150',
            'category' => 'required|max:50',
            'description' => 'required|max:255',
            'body' => 'max:5000'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio!',
            'title.max' => 'Il titolo deve avere un massimo di :max caratteri!',
            'category.required' => 'La categoria è obbligatoria!',
            'category.max' => 'La categoria deve avere un massimo di :max caratteri!',
            'description.required' => 'La descrizione è obbligatoria!',
            'description.max' => 'La descrizione deve avere un massimo di :max caratteri!',
            
        ];
    }
}
