<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFastFoodRequest extends FormRequest
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
            'name'=>'required|min:5|max:50',
            'price'=>'required|between:2,99999',
            'description'=>'required|min:10|max:250',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg|max:5200',

        ];
    }
    public function messages ():array
    {
        return [
            'name.required'=>'وارد کردن نام الزامی است',
            'name.min'=>'حداقل کاراکتر واترد شده باید 5 باشد',
            'name.max'=>'حداکثر کاراکتر وتارد شده باید 50 باشد',
            'price.required'=>'وارد کردن قیمت الزامی است',
            'price.between'=>'قیمت چیزی بین 2 تا 9999 باشد',
            'description.required'=>'وارد کردن توضیحات الزامی است',
            'description.min'=>'حداقل کاراکتر وارد شده10 است',
            'description.max'=>'حداکثر کاراکتر وارد شده باید 250 باشد',
            'image.required'=>'وارد کردن عکس الزامی است',
            'image.mimes'=>'عکس باید با فرمت صحیح وارد شود',
            'image.max'=>'حداکثر حجم عکس باید 5 مگابایت باشد'
        ];
    }

}
