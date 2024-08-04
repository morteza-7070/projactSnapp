<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFastFoodRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required|numeric',
            'discount_id' => 'required',

        ];
    }
        public function messages(): array
    {
        return[
            'name.required'=>'وارد کردن نام الزامی است',
            'image.required'=>'وارد کردن عکس الزامی است',
            'image.image'=>'فرمت عکس از نوع image است',
            'image.mimes'=>'صحیح باید باشد نوع عکس از فرمت ص',
            'image.max'=>'حراکثر حجم عکس5000 است',
            'description.required'=>'این فیلد نمیتواند خالی باشد',
            'price.required'=>'قیمت را وارد نمایید',
            'price.numeric'=>'قیمت عدد میپذیرد',
            'discount_id.required'=>'وارد کردن درصد تخفیف  اجباری است',

        ];
    }

}
