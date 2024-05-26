<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Cart/cart.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <a href="{{route('Cart.create')}}">create</a>

    @foreach($carts as $cart)
        <table>
            <thead>
            <tr>
                <th>نام مشتری</th>
                <th>نام غذا</th>
                <th>مقدار</th>
                <th> قیمت هر محصول</th>
                <th>مجموع قیمت سفارش</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td id="name">{{$cart->users->name}}</td>
                <td>{{$cart->food->name}}</td>
                <td id="quantity">{{$cart->quantity}}</td>
                <td>{{$cart->food->price}}ریال</td>
                <td>{{$cart->food->price*$cart->quantity}}ریال</td>

                <td id="time">{{$cart->created_at}}</td>




                <td>
                    <form action="{{route('Cart.destroy' ,$cart->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Cart.edit',$cart->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
{{--            <h1>{{$cart->users->name}}</h1>--}}
{{--            <h2>{{$cart->foods->name}}</h2>--}}
{{--            <h3>{{$cart->quantity}}</h3>--}}
{{--        <div class="card" style="width: 18rem;">--}}
{{--            <img src="..." class="card-img-top" alt="...">--}}
{{--            <div class="card-body">--}}
{{--                <h5 class="card-title">{{$cart->users->name}}</h5>--}}
{{--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endforeach
</div>
