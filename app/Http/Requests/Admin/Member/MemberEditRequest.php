<?php

namespace App\Http\Requests\Admin\Member;

use Illuminate\Foundation\Http\FormRequest;

class MemberEditRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'sex' => 'required|string',
            'age' => 'required|integer',
            'id_card' => 'required|string',
            'birth_date' => 'required|string',
            'address' => 'required|string',
            'mobile_no' => 'required|string',
            'social_id' => 'required|string',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_mobile' => 'required|string',
            'emergency_contact_relation' => 'nullable|string',
            'congenital_disease' => 'nullable|string',
            'image' => 'string|nullable',
            'status' => 'required',
        ];
    }
}
