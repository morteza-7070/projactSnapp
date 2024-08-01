<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodCategoryIranianRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'price' => 'required|min:4|max:8',
            'discription' => 'required|string|max:255',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(): array{
        return [
            'name.required'=>'وارد کردن نام اجباری است',
            'name.string'=>'فیلد نام فقط میتواند حروف را بگیرد',
            'name.max'=>'حداکثر تعداد کلمه255 است',
            'price.required'=>'وارد کردن قیمت اجباری است',
            'price.min'=>'حداقل قیمت 4 کاراکتر میگیرد',
            'price.max'=>'حداکثر قیمت 8 کاراکتر میگیرد',
            'discription.required'=>'این فیلد نمیتواند خالی باشد',
            'discription.string'=>'این فیلد از نوع رشته را میگیرد',
            'discription.max'=>'حداکثر تعداد کاراکتر ورودی 255 است',
            'image.required'=>'وارد کردن عکس اجباری است',
            'image.image'=>'نوع فایل از نوع imageاست',
            'image.mimes'=>'فرمت عکس باید درست باشد',
            'image.max'=>'حداکثر حجم عکس باید 2048 باشد',
        ];
    }
}
