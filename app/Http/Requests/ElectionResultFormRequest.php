<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectionResultFormRequest extends FormRequest
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
            'senatorial_apc' => 'required|integer',
            'senatorial_pdp' => 'required|integer',
            'senatorial_other' => 'required|integer',
            'senatorial_invalid_vote' => 'required|integer',

            'presidential_apc' => 'required|integer',
            'presidential_pdp' => 'required|integer',
            'presidential_other' => 'required|integer',
            'presidential_invalid_vote' => 'required|integer',

            'representative_apc' => 'required|integer',
            'representative_pdp' => 'required|integer',
            'representative_other' => 'required|integer',
            'representative_invalid_vote' => 'required|integer'
        ];
    }
}
