<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodCategoryIranianRequest extends FormRequest
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
            'name'=>'required|string|min:5|max:50',
            'price'=>'required|numeric|between:2,1000000',
            'description'=>'required|min:10|max:255',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:8000'
        ];
    }
    public function messages() :array
    {
        return [
            'name.required'=>'وارد کردن نام الزامی است',
            'name.string'=>'نام باید  شامل حروف باشد',
            'name.min'=>'حداقل کاراکتر برای نام5 است',
            'name.max'=>'حداکثر کاراکتر برای نام50 است',
            'price.required'=>'وارد کردن قیمت الزامی است',
            'price.between'=>'قیمت بین 2 تا1000000 است',
            'description.required'=>'توضیحات الزامی است',
            'description.min'=>'حداقل کاراکتر برای توضیحات52 است',
            'description.max'=>'حراقل کاراکتر برای نوضیحات 255 است',
            'image.required'=>'وارد کردن عکس الزامی است',
            'image.mimes'=>'    فرمت عکس بایداز نوع صحیح باشد',
            'image.max'=>'حداکثر حجم عکس نباید بیشتر از8 مگابالیت باشد',
        ];
    }
}
