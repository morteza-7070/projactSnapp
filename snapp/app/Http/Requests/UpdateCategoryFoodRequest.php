<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryFoodRequest extends FormRequest
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
            'name'=>'required|string|min:3',
            'price'=>'required|numeric',
            'description'=>'required|min:10|max:255',
            'ImageFood'=>'required|mimes:jpeg,png,jpg,gif,svg|max:5000',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'وارد کردن نام الزامی است',
            'name.string'=>'کاراکتر نام از نوع رشته باید باشد',
            'name.min'=>'حداقل کاراکتر برای فیلد نام3 است',

            'price.required'=>'قیمت الزامی است',
            'price.numeric'=>'قیمت باید از نوع عدد باشد',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'description.min'=>'حداقل کاراکتر لازم برای توضیحات10 است',
            'description.max'=>'حداکثر کاراکتر لازم برای توضیحات 255 است',
            'ImageFood.required'=>'وارد کردن عکس الزامی میباشد',

            'ImageFood.mimes'=>'     باشدنوع فرمت فایل باید از نوع',
            'ImageFood.max'=>'حداکثر حجم عکس نباید بیشتر از5 مگابایت باشد',

        ];
    }
}
