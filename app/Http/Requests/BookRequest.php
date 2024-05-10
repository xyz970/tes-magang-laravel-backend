<?php

namespace App\Http\Requests;

use App\Rules\CountryRule;
use App\Rules\StatusRule;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string|max:100', 
            'author'=>'required|string|max:50',
            'publisher'=>'required|string|max:50', 
            'country'=>['required',new CountryRule], 
            'publish_date'=>'required|numeric', 
            'desc'=>'required', 
            'status'=>['required'],
        ];
    }
}
