<?php

namespace App\Http\Requests;

use App\Rules\CnicFormat;
use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'email' => 'required|min:10|max:30|unique:patients|regex:/^.+@.+$/i',
            'dob'   => 'required',
            'cnic' => ['required', new CnicFormat],
        ];
    }
}
