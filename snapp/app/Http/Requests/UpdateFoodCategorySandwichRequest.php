<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodCategorySandwichRequest extends FormRequest
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
            'name' => 'required|string|between:2,100',
            'description' => 'required|between:2,100',
            'price' => 'required|between:1,999999.99',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(): array
    {
            return [
                'name.required' => 'وارد کردن نام اجباری است',
                'name.between'=>'تعداد حروف نام بین 2 تا 100 حرف باید باشد',
                'description.required' => 'وارد کردن توضیحات اجباری است',
                'description.between'=>'تعداد حروف توضیحات بین 2 تا100 حرف باید باشد',
                'price.required' => 'وارد کردن قیمت اجباری است',
                'price.between'=>'قیمت عددی بین 1 تا 99999 میتواند باشد',
                'image.required' => 'وارد کردن عکس اجباری است',
                'image.mimes' => 'فرمت عکس را صحیح وارد نمایید',
                'image.max' => 'حداکثر حجم عکس تا 2 مگابایت است',

            ];
    }
}
