{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-8">--}}
{{--                @extends('form restaurant.formRestuarant')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </x-slot>--}}
<head>
    @vite([
           'resources/css/app.css', 'resources/scss/header/header.scss',
           'resources/js/app.js',
       ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<div class="head">
    @extends('header\headerForm')

</div>

<div class="row">
        <div class="col-sm-6 ">
{{--            @extends('form restaurant.formRestuarant');--}}
            <div class="btn">
               <a href="{{route('seller.form.index')}}" > <button class="btn btn-primary">ورود به صفحه تکمیل مشخصات رستوران</button></a>
            </div>
        </div>
    <div class="col-sm-6">
        <div class="btn">
            <a href="{{route('buyer.items')}}"><button class="btn btn-success">صفحه ورود خریدار</button></a>
        </div>
    </div>
</div>
{{--<div class="flex">--}}
{{--    <div class="btn">--}}
{{--                       <a href="{{route('seller.form.index')}}" > <button class="btn btn-primary">ورود به صفحه تکمیل مشخصات رستوران</button></a>--}}

{{--    </div>--}}
{{--</div>--}}



{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <h1>morteza</h1>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
