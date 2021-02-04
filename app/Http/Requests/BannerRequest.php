<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
        ];
    }
    public function message(){
        return [
            'name.required' => 'The name cannot be empty',
            'title.required' => 'The title cannot be empty',
            'content.required' => 'The content cannot be empty',
        ];
    }
}
