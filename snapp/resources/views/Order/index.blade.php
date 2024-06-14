
<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Orders/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <a href="{{route('Order.create')}}">create</a>

    @foreach($Orders as $order)
        <table>
            <thead>
            <tr>
                <th>نام مشتری</th>
                <th>نام غذا </th>
                <th>نام رستوران </th>
                <th>شماره تماس</th>
                <th>مقدار </th>
                <th>وضعیت </th>
                <th>قیمت محصول بدون تخفیف </th>
                <th>درصد تخفیف</th>
                <th> قیمت  با تخفیف </th>
                <th>قیمت مجموع محصول با تخفیف</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$order->users->name}}</td>
                <td>{{$order->Food->name}}</td>
                <td>{{$order->seller->restaurant_name}}</td>
                <td>{{$order->users->phoneNumber}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->Food->price}}</td>
                <td>{{$order->discount->percentage }}</td>
                <td>{{$order->Food->price -( $order->Food->price *$order->discount->percentage /100)  }}</td>
                <td>{{($order->Food->price -( $order->Food->price *$order->discount->percentage /100))*$order->quantity }}</td>
                <td>
                    <form action="{{route('Order.destroy',$order->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Order.edit',$order->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </td>
                <td>

                </td>
            </tr>
            </tbody>
        </table>
    @endforeach

</div>
