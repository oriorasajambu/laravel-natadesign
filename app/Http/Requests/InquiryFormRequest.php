<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class InquiryFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|max:50',
            'type' => 'required',
            'size' => 'required',
            'location' => 'required',
            'job' => 'required',
            'time' => 'required',
            'info' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'code'      => 400,
            'success'   => false,
            'message'   => 'Bad Request',
            'data'      => null,
        ], 400));
    }
}
