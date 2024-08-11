<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatefriedRequest extends FormRequest
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
            'name'=>'max:50',
            'description'=>'max:255',
            'price'=>'numeric|between:20000,190000',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:5000',


        ];
    }
    public function messages(): array
    {
        return[
            //'name.required'=>'فیلد نام الزامی میباشد',
           // 'description.required'=>'فیلد تعوضیحات الزامی میباشد',
           //'price.required'=>'فیلد قیمت الزامی میباشد',
            'image.required'=>'وارد کردن عکس غذا الزامی است',
           // 'image.image'=>'',
            'image.mimes'=>'حیح وارد شود    فایل باید با فرمت ص',
            'image.max'=>'5 مگابایت میباشدحداکثر حجم فایل حاوی عکس',
           // 'name.string'=>'نام از نوع رشته باید وارد شود',
            'name.max'=>' حداکثر کاراکتر  برای فیلد نام 50 است',
            //'description.string'=>'فیلد توضیحات از نوعرذشته باید باشد',
            'description.max'=>'حداکثر کاراکتر توضیحات255 است',
            'price.numeric'=>'قیمت از نوع عدد میباشد',
            'price.between'=>'قیمت چیزی بین 20000 تا190000 باید وارد وانتخاب شود',

        ];
    }
}
