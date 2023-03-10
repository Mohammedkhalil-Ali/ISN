<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PostValidate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        if(in_array($this->method(),['PUT','PATCH'])){
            return[

            ];
        }else{
            return[
                "caption"=>"required",
                "file.*"=>"mimes:png,jpg"
            ];
        };
    }
}
