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
            'assembly_apc' => 'required|integer',
            'assembly_pdp' => 'required|integer',
            'assembly_other' => 'required|integer',
            'assembly_invalid_vote' => 'required|integer',

            'governor_apc' => 'required|integer',
            'governor_pdp' => 'required|integer',
            'governor_other' => 'required|integer',
            'governor_invalid_vote' => 'required|integer'

        ];
    }
}
