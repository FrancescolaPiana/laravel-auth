<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects|max:150|min:3',
            'description' => 'nullable'
        ];
    }

    public function message()
    {
        return [
            'title.required' => 'il titolo è Obbligatorio',
            'title.unique:projects' => 'Purtroppo questo titolo esiste già.',
            'title.min' => 'il titolo deve essere lungo almeno :min caratteri',
            'title.max' => 'il titolo non deve superare i :max Catatteri'
        ];
    }
}