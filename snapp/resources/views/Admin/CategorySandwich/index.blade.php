
<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Sandwich/sandwich.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <a href="{{route('Food.sandwich.create')}}" id="create">ایجاد غذا</a>
    <a href="{{route('home')}}" id="home">صفحه اصلی</a>
    @foreach( $sandwiches as $sandwich)
        <table>
            <thead>
            <tr>
                <th>نام</th>
                <th>عکس</th>
                <th>قیمت</th>
                <th>توضیحات</th>
                <th>درصد تخفیف</th>
                <th>قیمت با احتساب تخفیفات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$sandwich->name}}
                    @if ($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                </td>
                <td><img src="{{asset('storage/' . $sandwich->image)}}" alt="CategorySandwich" id="img"></td>
                <td>{{$sandwich->price}}</td>
                <td>{{$sandwich->description}}</td>
                <td>{{$sandwich->discount->percentage}}</td>
                <td>{{$sandwich->price * ($sandwich->discount->percentage / 100)}}</td>

                <td>
                    <form action="{{route('Food.sandwich.destroy', $sandwich->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Food.sandwich.edit',$sandwich->id)}}" method="post" >
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>

    @endforeach
</div>
