<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RestRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string',
            'surname' => 'required|string',
            'accept' => 'required|boolean'
        ];

        switch ($this->getMethod()) {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                    'rest_id' => 'required|integer|exists:Rest,id', //должен существовать.
                    'name' => 'required|max:255',
                    'surname' => 'required|max:255']+ $rules;
            case 'DELETE':
                return [
                    'rest_id' => 'required|integer|exists:Rest,id'
                ];
        }
    }
}
