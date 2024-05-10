@vite([
              'resources/css/app.css', 'resources/scss/categoryFood/Food.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <a href="{{route('home')}}">backHome</a>
    <a href="{{route('Admin.food.create')}}">create</a>
    @foreach($foodCategory as $foods)
        <table class="category-food">
            <thead>
            <tr>
                <th>id</th>
                <th>نام</th>
                <th>عکس</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td><h4 id="id">{{$foods->id}}</h4></td>
                <td><h4 id="name">{{$foods->name}}</h4></td>
                <td><img src="{{$foods->image_food}}" alt="" id="image"></td>

                <td>
                    <form action="{{route("Admin.food.destroy",$foods->id)}}" method="post" class="delete">
                        @csrf
                        @method('DELETE')
                        {{$foods->text}}
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td class="form-edit">
                    <form action="{{route("Admin.food.edit",$foods->id)}}" method="post" class="edit">
                        @csrf
                        <button type="submit" class="btn btn-success">edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach

</div>

