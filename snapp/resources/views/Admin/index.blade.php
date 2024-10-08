
<head>
    @vite([
        'resources/css/app.css', 'resources/scss/food/Admin.scss',
        'resources/js/app.js',
    ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <h1>لیست رستوران ها</h1>
    <a href="{{route('home')}}">backHome</a>
    <button class=" btn btn-info text-black "><a href="{{route('Admin.create')}}">وارد کردن نام رستوران</a></button>
    @foreach($category as $names)
        <table class="category-restaurant">
            <thead>
            <tr>
                <th class="id"><h4>id</h4></th>

                <th class="image"><h4>image</h4></th>
                <th class="names"><h4>names</h4></th>

            </tr>
            </thead>
            <tbody>
            <tr>

                <td class="id">{{$names->id}}</td>
                <td class="imageRestaurant"> <img src="{{ asset('storage/' . $names->image_restaurant) }}" alt="Banner Image" style="max-width: 800px;"></td>
                <td class="name"><h3>{{$names->name}}</h3></td>
                <br>

                    <td class="form-delete">
                        <form action="{{route("Admin.destroy",$names->id)}}" method="post" class="form-delete">
                            @csrf
                            @method('DELETE')
                            {{$names->text}}
                            <button type="submit" class="btn btn-danger" id="btn-delete">Delete</button>
                        </form>
                    </td>
                    <td class="form-edit">
                        <form action="{{route("Admin.edit",$names->id)}}" method="get">
                            @csrf


                            <button type="submit" class="btn btn-success" id="edit">Edit</button>
                        </form>
                    </td>





                {{--                <td><a href="{{route('Admin.edit',$names->id)}}" class="btn btn-success">ویرایش</a></td>--}}
            </tr>
            </tbody>
        </table>
    @endforeach
</div>

