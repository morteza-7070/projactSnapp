<head>
@vite([
              'resources/css/app.css', 'resources/scss/Discount/discount.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <a href="{{route('home')}}">backHome</a>
    <a href="{{route('Admin.discount.create')}}" class="text-black" style="color: #1a202c">create</a>
    @foreach($discount as $dis)
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>percentage</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><h4>{{$dis->id}}</h4></td>
                <td><h4>{{$dis->name}}</td>
                <td><h4>{{$dis->percentage}}</h4></td>
                <td>
                    <form action="{{route('Admin.discount.destroy',$dis->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        {{$dis->text}}
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Admin.discount.edit',$dis->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
</div>
