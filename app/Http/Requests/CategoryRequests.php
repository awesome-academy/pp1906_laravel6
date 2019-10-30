<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }
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
            // 'name' => 'required|unique:categorys|max:255',
            'name' => [
                'required',
                Rule::unique('categories')->ignore($this->category),

            ],
        ];
    }

    //
    public function messages() {
        return [
            'name.unique' => 'CATEGORY NAY DA TON TAI'
        ];
    }
}
