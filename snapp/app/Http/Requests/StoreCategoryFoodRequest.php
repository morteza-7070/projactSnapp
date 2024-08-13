<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryFoodRequest extends FormRequest
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
            'ImageFood' => 'required|mimes:jpeg,png,jpg,gif,svg|max:8000',
            'description'=>'required|min:10|max:255',
            'price'=>'required',
            'discount_id'=>'required',


        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'وارد کردن نام الزامی می باشد',
            'ImageFood.required'=>'بارگذاری عکس غذا الزامی است',
           // 'ImageFood.image'=>'نوع فایل از نوع عکس باید باشد',
            'ImageFood.mimes'=>'فرمت عکس را به طور صحیح وارد نمایید',
            'ImageFood.max'=>'حداکثر حجم عکس باید کمتر از 5 مگابایت باشد',
            'description.required'=>'واردذ کردن توضیحات الزامی است',
            'description.min'=>'حداقل تعداد کاراکتر لازم10 است',
            'description.max'=>'حداکثر تعداد کاراکتر 255 است',
            'price.required'=>'وارد کردن قیمت اجباری است',
           // 'price.numeric'=>'قیمت از نوع عدد باید باشد',
           // 'price.between'=>'قیمت چیزی بین1000 تا 50000 باید انتخاب شود',
            'discount_id.required'=>'انتخاب در صد تخفیف الزامی است',

            'discount_id.exists'=>'در صد تخفیف مورد نظر وجود ندارد',

        ];
    }
}
