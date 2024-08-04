<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodCategorySandwichRequest extends FormRequest
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
            'price' => 'required|min:4',
            'description'=>'required|max:200|min:7',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:5200',


        ];
    }
    public function messages(): array{
       return[
           'name.required'=>'وارد کردن نام  و نام خانوادگی الزامی است',
           'price.required'=>'وارد کردن قیمت الزامی است',
           'price.min'=>'قیمت مناسب را وارد کنید(قیمت ها به تومان میباشد)',
           'description'=>'وارد کردن فیلد توضیحات الزامی است',
           'description.max'=>'حداکثر تعداد کارکتر نباید بیشتر از 200 حرف باشد',
           'description.min'=>'حداقل کاراکتر برای ورود7 حرف است',
           'image.required'=>'وارد کردن عکس الزامی است',
           'image.mimes'=>'فرمت صحیح را وارد نمایید',
           'image.max'=>'حداکثر حجم عکس باید 5 مگابایت باشد'



       ];
    }
}
