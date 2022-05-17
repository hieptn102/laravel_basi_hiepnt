<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'mail_address'=>'required|min:6|max:50|email',
            'password'=>'required|string|min:6|max:50',
            'password_confirmation'=>'required|same:password',
            'name'=>'required|string|max:255',
            'address'=>'string|max:255',
            'phone'=>'required|digits_between:0,15'
        ];
    }
    public function messages()
    {
        return[
            'mail_address.required'=>'Vui lòng nhập email của bạn',
            'mail_address.min'=>'Email phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'mail_address.max'=>'Email phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'mail_address.email'=>'Vui lòng nhập chính xác email',
            'password.required'=>'Vui lòng nhập mật khẩu của bạn',
            'password.min'=>'Password phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'password.max'=>'Password phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'password_confirmation.required'=>'Vui lòng nhập mật khẩu của bạn',
            'password_confirmation.same'=>'Mật khẩu không khớp'
        ];
    }

}
