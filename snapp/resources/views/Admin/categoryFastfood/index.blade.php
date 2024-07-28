<head>
@vite([
              'resources/css/app.css', 'resources/scss/fastfood/Fastfood.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <a href="{{route('Food.fastFood.create')}}">create</a>
    @foreach($fasts as $fast)
        <table>
            <thead>
            <tr>
                <th>نام</th>
                <th>عکس</th>

                <th>قیمت</th>
                <th>توضیحات</th>
                <th>تخفیفات</th>
                <th>قیمت با احتساب تخفیفات</th>


            </tr>
            </thead>
            <tbody>
            <tr>

                <td>{{$fast->name}}</td>
                <td><img src="{{ asset('storage/' . $fast->image) }}" alt="CategoryFastFoods" style="max-width: 800px;"></td>
                <td>{{$fast->price}}</td>
                <td>{{$fast->description}}</td>
                <td>{{$fast->discount->percentage}}٪</td>
                <td>{{$fast->price*$fast->discount->percentage/100}}</td>
                <td>
                    <form action="{{route('Food.fastFood.destroy',$fast->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        {{$fast->text}}
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Food.fastFood.edit',$fast->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
</div>
