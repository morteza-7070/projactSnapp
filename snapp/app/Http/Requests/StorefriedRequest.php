<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorefriedRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'image'=>'required|mimes:jpeg,jpg,png|max:8000',
            'description'=>'required|min:10|max:255',
            'discount_id'=>'required'
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'وارد کردن نام الزامی است',
            'price.required'=>'وارد کردن قیمت الزامی است',
            'image.required'=>'وارد کردن عکس الزامی است',
            'image.mimes'=>' صحیح باشدفرمت عکس باید از نوع ',
            'description.required'=>'توضیحات الزامی است',
            'description.min'=>'حداقل کاراکتر10 است',
            'description.max'=>'حداکثر کاراکتر255 است',
            'discount_id.required'=>'فیلد در صد تخففات الزامی است'
        ];
    }
}
