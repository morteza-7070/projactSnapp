<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSellerRequest extends FormRequest
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
            'email' => 'required|string|email|max:50|unique:sellers',
            'phoneNumber' => 'required|number|max:255',
            'restaurant_name' => 'required|string|max:60',
            'address_seller' => 'required|string|max:255',

        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'name'=>$this->input('name'),
            'email'=>$this->input('email'),
            'phoneNumber'=>$this->input('phoneNumber'),
            'restaurant_name'=>$this->input('restaurant_name'),
            'address_seller'=>$this->input('address_seller'),

        ]);
    }
    public function messages(): array
    {
       return [
           'name.required'=>'وارد کردن نام الزامی است',
           'name.string'=>'نام باید از نوع رشته باشد',
           'name.max'=>'حداکثر کاراکتر لازم255 است',

           'email.required'=>'وارد کردن ایمیل الزامی است',
           'email.string'=>'ایمیل از نوع رشته باید باشد',
           'email.email'=>'ایمیل از نوع رشته باید باشد ',
           'email.max'=>'حداکثر کاراکتر لازم برای ایمیل50 است',
           'email.unique'=>'ایمیل باید یکتا باشد',
           'phoneNumber.required'=>'شماره همراه الزامی است',
           'phoneNumber.number'=>'شماره همراه از نوع عدد است',
           'phoneNumber.max'=>'حداکثر کاراکتر لازم12 است',

           'restaurant_name.required'=>'نام رستوران الزامی است',
           'restaurant_name.string'=>'نام انتخابی باید از نوع رسته باشد',
           'restaurant_name.max'=>'حداکگثر کاراکتر وارد شده60است',
           'address_seller.required'=>'وارد کردن  آدرس الزامی است',
           'address_seller.string'=>'آدرس از نوع رشته باید باشد',
           'address_seller.max'=>'حداکثر کاراکترلارم برای آدرس255 است',

       ];

    }
}
