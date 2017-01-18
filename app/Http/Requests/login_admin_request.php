<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class login_admin_request extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'username'=>'required',
            'password' =>'required',
        ];
    }
    public function messages()
    {
        return[
                'username.required'=>'Vui lòng nhập tên tài khoản',
                'username.min'=>'Tên tài khoản ít nhất phải có 5 ký tự',
                'passwd.required'=>'Vui lòng nhập mật khẩu để đăng nhập',
        ];
    }
}
