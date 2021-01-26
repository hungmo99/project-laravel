<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'bạn chưa nhập name',
            'phone.required' => 'bạn chưa nhập phone',
            'address.required' => 'bạn chưa nhập address',
            'email.required' => 'bạn chưa nhập email',
        ];
    }
}
