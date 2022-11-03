<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rocketRequest extends FormRequest
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
            'rocket_name' => 'nullable',
            'rocket_launch_datetime' => 'nullable',
            'initial_spreed' => 'nullable',
            'last_spreed' => 'nullable',
            'acceleration' => 'nullable',
            'linear_spreed_at_empty_space' => 'nullable',
            'distance' => 'nullable'
        ];
    }
}
