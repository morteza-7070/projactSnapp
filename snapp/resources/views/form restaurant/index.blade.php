<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/formRestaurant/formRestaurant.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <a href="{{route('seller.create')}}">create</a>
    @foreach($forms  as $form)
        <table>
            <thead>
            <tr>
                <th>نام</th>
                <th>نوع رستوران</th>
                <th>شماره تماس</th>
                <th>آدرس رستوران</th>
                <th>شماره حساب</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$form->name}}</td>
                <td>{{$form->type}}</td>
                <td>{{$form->phoneNumber}}</td>
                <td>{{$form->address}}</td>
                <td>{{$form->accountNumber}}</td>
                <td>
                    <form action="{{route('seller.destroy',$form->id)}}" method="POST" id="delete">
                        @csrf
                        @method('DELETE')
{{--                        {{$form->text}}--}}
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('seller.edit',$form->id)}}" method="GET" id="edit">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>

                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
</div>
