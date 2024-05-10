
@vite([
              'resources/css/app.css', 'resources/scss/style.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form action="{{route('Admin.food.update',$foodCategory->id)}}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" placeholder="name" value="{{$foodCategory->name}}"><br>
    <input type="text" name="description" placeholder="enter description" value="{{$foodCategory->description}}"><br>
    <button type="submit" class="btn btn-info" name="submit">ارسال</button>
</form>


