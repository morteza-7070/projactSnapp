<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/iranian/Iranian.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <a href="{{route('Food.iranian.create')}}" id="FoodIranian">ایجاد غذا</a>
    <a href="{{route('home')}}" class="pl-5" id="Home">صفحه اصلی</a>
    @foreach($iranian as $iran)
        <table>
            <thead>
            <tr>

                <th>نام</th>
                <th>عکس</th>
                <th>قیمت</th>
                <th>توضیحات</th>
                <th>تخفیفات</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                {{--            <td>{{$iran->id}}</td>--}}
                <td>{{$iran->name}}</td>
                <td><img src="{{ asset('storage/' . $iran->image) }}" alt="CategoryIranian" style="max-width: 800px;"></td>
                <td>{{$iran->price}}</td>
                <td>{{$iran->description}}</td>
                <td>{{$iran->discount->percentage}}%</td>
                <td>
                    <form action="{{route('Food.iranian.destroy',$iran->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        {{$iran->text}}
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Food.iranian.edit',$iran->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach

</div>
