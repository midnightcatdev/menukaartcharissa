<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'allergies' => 'required',
            'price' => 'required',
            'foodtype_id' => 'required',
            'recipes' => 'required',
            'photo_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Naam',
            'description' => 'Omschrijving',
            'allergies' => 'Allergenen',
            'price' => 'Prijs',
            'foodtype_id' => 'Gerecht type',
            'recipes' => 'Recepten',
            'photo_name' => 'Foto',
        ];
    }
}
