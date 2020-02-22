<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'client_name' => 'required|min:6',
            'address' => 'required|min:6',
            'father_name' => 'required|min:6',
            'mother_name' => 'required|min:6',
            'joined_date' => 'required',
            'contact_number' => 'required|min:6',
            'is_vip' => '',
            'weight' => 'required',
            'temperature' => 'required',
            'blood_group' => 'required',
            'blood_pressure' => 'required',
            //
        ];
    }

}
