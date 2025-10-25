<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeadMasterRequest extends FormRequest
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
             'first_name' => 'required',
             'image' => 'required'
        ];
    }
    public function messages()
      {
       return [ 'image.required' => 'An image is required', ];
      }
}
