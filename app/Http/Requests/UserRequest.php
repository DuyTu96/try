<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:1|max:50',
            'email' => 'required|email|min:3|max:50|unique:users,email,'.$this->id,
            'password' => 'required|min:8|max:20',
            'address' => 'required',
            'phone' => 'required|numeric',
            'birthday' => 'required|date',
            'role' => 'required|min:1|max:2|numeric',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => trans('setting.name_required'),
        'name.min' => trans('setting.name_min'),
        'name.max' => trans('setting.name_max'),
        'email.required' => trans('setting.email_required'),
        'email.min' => trans('setting.email_min'),
        'email.max' => trans('setting.email_max'),
        'email.unique' => trans('setting.email_unique'),
        'email.email' => trans('setting.email_email'),
        'password.required' => trans('setting.password_required'),
        'password.min' => trans('setting.password_min'),
        'password.max' => trans('setting.password_max'),
        'address.required' => trans('setting.address_required'),
        'phone.required' => trans('setting.phone_required'),
        'phone.numeric' => trans('setting.phone_numeric'),
        'birthday.required' => trans('setting.birthday_required'),
        'birthday.date' => trans('setting.birthday_date'),
        'role.required' => trans('setting.role_required'),
        'role.min' => trans('setting.role_min'),
        'role.max' => trans('setting.role_max'),
        'role.numeric' => trans('setting.role_numeric'),
        ];
    }
}
 