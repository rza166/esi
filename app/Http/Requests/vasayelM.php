<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vasayelM extends FormRequest
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
          'city'=>'required',
          'map'=>'nullable',
          'price'=>'nullable|numeric',
          'moaveze'=>'nullable|numeric',
          'typeagahi'=>'required_if:menu,601,602,603,631|nullable|numeric',
            'mobile'=>'required|numeric',
            'chat'=>'nullable|numeric',
            'numbertel'=>'nullable|numeric',
            'onvanagahi'=>'required|alpha_dash',
             'tozihat'=>'required|alpha_dash',
             'menu'=>'nullable|alpha
        ];
    }
}
