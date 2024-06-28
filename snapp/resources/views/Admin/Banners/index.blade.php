<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Banners/banners.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="{{ route('Admin.banner.create') }}">Create Banner</a>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>

        </tr>
        </thead>
        <tbody>
        @foreach($banners as $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td><img src="{{ asset('storage/' . $banner->file) }}" alt="Banner Image" style="max-width: 800px;"></td>
                <td>
                    <form action="{{ route('Admin.banner.destroy', $banner->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
{{--                    <a href="{{ route('Admin.banner.edit', $banner->id) }}">Edit</a>--}}
                </td>
                <td>
                    <form action="{{route('Admin.banner.edit',$banner->id)}}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-info">Edit</button>
                                        </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
{{--<div class="container">--}}
{{--    <a href="{{route('home')}}">backHome</a><br>--}}
{{--    <a href="{{route('Admin.banner.create')}}" >create Banners</a>--}}
{{--    @foreach($banners as $banner)--}}
{{--        <table>--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>id</th>--}}
{{--                <th>image</th>--}}


{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td>{{$banner->id}}</td>--}}

{{--                <td><img src="{{asset('./uploads/banners',$banner->images3)}}"  style="width: 80%" alt=""></td>--}}

{{--                <td>--}}
{{--                    <form action="{{route("Admin.banner.destroy",$banner->id)}}" method="post" class="delete">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        {{$banner->text}}--}}
{{--                        <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <form action="{{route('Admin.banner.edit',$banner->id)}}" method="get">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-info">Edit</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--<div class="container">--}}
{{--    <a href="{{route('home')}}">backHome</a><br>--}}
{{--    <a href="{{route('Admin.banner.create')}}">create Banners</a>--}}
{{--    @foreach($banners as $banner)--}}
{{--        <table>--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>id</th>--}}
{{--                <th>image</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td>{{$banner->id}}</td>--}}
{{--                <td>--}}
{{--                    @if($banner->file)--}}
{{--                        <img src="{{ asset('storage/' . $banner->file) }}" alt="Banner Image" style="max-width: 200px;">--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <form action="{{route("Admin.banner.destroy",$banner->id)}}" method="post" class="delete">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        {{$banner->text}}--}}
{{--                        <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    <form action="{{route('Admin.banner.edit',$banner->id)}}" method="get">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-info">Edit</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    @endforeach--}}
{{--</div>--}}
