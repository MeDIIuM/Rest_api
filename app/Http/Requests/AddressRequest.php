<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddressRequest extends FormRequest
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
            'region' => 'required|string',
            'nas_punkt' => 'required|string',
            'street' => 'required|string',
            'house' => 'required|string',
            'index' => 'required|string',
        ];

        switch ($this->getMethod()) {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                    'Address_id' => 'required|integer|exists:Address,id', //должен существовать.
                        'region' => [
                            'required',
                            Rule::unique('Address')->ignore($this->region, 'region') //должен быть уникальным, за исключением себя же
                        ],
                        'nas_punkt' => [
                            'required',
                            Rule::unique('Address')->ignore($this->nas_punkt, 'nas_punkt') //должен быть уникальным, за исключением себя же
                        ],
                        'street' => [
                            'required',
                            Rule::unique('Address')->ignore($this->street, 'street') //должен быть уникальным, за исключением себя же
                        ],
                        'house' => 'required|max:255',
                        'index' => [
                            'required',
                            Rule::unique('Address')->ignore($this->index, 'index') //должен быть уникальным, за исключением себя же
                        ]
                    ]+ $rules;
            case 'DELETE':
                return [
                    'Address_id' => 'required|integer|exists:Address,id'
                ];
        }
    }
}
