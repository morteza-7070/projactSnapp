<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/seller/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <a href="{{route('Seller.seller.create')}}">create seller</a>
    @foreach( $sellers as $seller)
        <table>
            <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تلفن</th>
                <th>نام رستوران</th>
                <th>آدرس رستوران</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td id="name">{{$seller->name}}</td>
                <td id="email">{{$seller->email}}</td>
                <td id="phone">{{$seller->phoneNumber}}</td>
                <td id="name2">{{$seller->restaurant_name}}</td>
                <td id="address">{{$seller->address_seller}}</td>
                <td>
                    <form action="{{route('Seller.seller.destroy',$seller->id)}}" method="post" id="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Seller.seller.edit',$seller->id) }}" method="POST" id="edit">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach

</div>
