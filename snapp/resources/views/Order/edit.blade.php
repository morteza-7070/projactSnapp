<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Orders/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Order.update' , $orders->id)}}" method="POST" id="FormEdit">
    @csrf
    @method('PUT')
    <div class="formEdit">
{{--        <input type="text" name="user_id" value="{{$orders->users->name}}"><br>--}}
        <select name="user_id" class="user">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>

            @endforeach
        </select><br>

        <select name="product_id" class="product">
            @foreach($foods as $food)
                <option value="{{$food->id}}">{{$food->name}}</option>

            @endforeach
        </select><br>
        <select name="seller_id" class="seller">
            @foreach($sellers as $seller)
                <option value="{{$seller->id}}">{{$seller->name}}</option>
            @endforeach
        </select><br>
        <select name="phone_id" class="phone">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->phoneNumber}}</option>
            @endforeach
        </select><br>
        <select name="discount_id" class="discount">
            @foreach($discounts as $discount)
                <option value="{{$discount->id}}">{{$discount->percentage}}</option>
            @endforeach
        </select><br>
        <select name="status" class="food">--}}
            @foreach($status as $order)


                <option value="pending">pending</option>
                <option value="accepted">accepted</option>
                <option value="rejected">rejected</option>


            @endforeach
        </select><br>
        <input type="number" name="quantity" placeholder="enter quantity" value="{{$order->quantity}}" class="quantity"><br>
      <button type="submit" class="btn btn-success">send Edit</button>

    </div>
</form>
