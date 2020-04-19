<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPost extends FormRequest
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
            'cat_id' => 'required|integer',
            'title' => 'required',
            'thumbnail' => 'required',
            'number' => 'required',
            'watts' => 'required',
            'size' => 'required',
            'color' => 'required',
            'package' => 'required',
            'weight' => 'required',
            'voltage' => 'required',
            'angle' => 'required',
            'waterproof' => 'required',
            'life' => 'required',
            'distance' => 'required',
            'material' => 'required',
            'characteristic' => 'required',
            'content' => 'required',

        ];
    }
}
