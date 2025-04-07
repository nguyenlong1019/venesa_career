<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required'],
            'password' => ['required', 'min:8'],
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'Username không được để trống!',
            'email.required' => 'Email không được để trống!',
            'email.unique' => 'Email đã tồn tại!',
            'email.email' => 'Email không hợp lệ!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'password.required' => 'Mật khẩu không được để trống',
        ];        
    }
}