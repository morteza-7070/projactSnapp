
@vite([
              'resources/css/app.css', 'resources/scss/style.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form action="{{route('Admin.food.update', $foodCategory->id)}}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name"  class="text-black" value="{{ $foodCategory->name}}"><br><br>
{{--    <input type="text" name="image_food"  value="{{ $foodCategory->image_food}}"><br>--}}
    <textarea name="image_food" class="text-black">{{$foodCategory->image_food}}</textarea><br><br>
    <input type="text" name="price"  value={{$foodCategory->price}} class="text-black">
    <br>
    <button type="submit" class="btn btn-info" name="submit">ارسال</button>
</form>


