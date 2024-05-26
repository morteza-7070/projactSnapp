@vite([
              'resources/css/app.css', 'resources/scss/food/Admin.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
{{--    <a href="{{route('home')}}">backHome</a>--}}
{{--    <a href="{{route('Admin.food.create')}}">create</a>--}}
{{--    @foreach($foodCategory as $foods)--}}
{{--        <table class="category-food">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>id</th>--}}
{{--                <th>نام</th>--}}
{{--                <th>عکس</th>--}}
{{--                <th>تخفیفات</th>--}}

{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td><h4 id="id">{{$foods->id}}</h4></td>--}}
{{--                <td><h4 id="name">{{$foods->name}}</h4></td>--}}
{{--                <td><img src="{{$foods->image_food}}" alt="" id="image"></td>--}}
{{--                <td>{{$foods->discount->percentage}}</td>--}}
{{--                <td>{{$discount->first()->percentage}}</td>--}}
{{--                <td><a href="http://127.0.0.1:8000/category/foods/2/1">انواع سوخاری</a></td>--}}

{{--                <td>--}}
{{--                    <form action="{{route("Admin.food.destroy",$foods->id)}}" method="post" class="delete">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        {{$foods->text}}--}}
{{--                        <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--                <td class="form-edit">--}}
{{--                    <form action="{{route("Admin.food.edit",$foods->id)}}" method="post" class="edit">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-success">edit</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @endforeach--}}
    <div class="category_iranian">
        <a href="{{route('Food.iranian.index')}}">غذاهای ایرانی</a>
        <img src="data:image/jpeg;base64,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">
    </div>
    <div class="category_FastFood">
        <a href="{{route('Food.fastFood.index')}}">فست فود </a>
        <img src="data:image/jpeg;base64,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" alt="">
    </div>

</div>

