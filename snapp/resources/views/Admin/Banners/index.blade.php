<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Banners/banners.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <a href="{{route('home')}}">backHome</a><br>
    <a href="{{route('Admin.banner.create')}}" >create Banners</a>
    @foreach($banners as $banner)
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>image</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$banner->id}}</td>

                <td><img src="data:image/jpeg;base64,{{ $banner->file }}" alt=""></td>

                <td>
                    <form action="{{route("Admin.banner.destroy",$banner->id)}}" method="post" class="delete">
                        @csrf
                        @method('DELETE')
                        {{$banner->text}}
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Admin.banner.edit',$banner->id)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
</div>
