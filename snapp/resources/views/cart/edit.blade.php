<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Cart/cart.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Cart.update',$carts->id)}}" method="POST" id="edit">
    @csrf
    @method('PATCH')
    <h1>EDIT FORM</h1>
    <div class="edit">
        <input type="text" class="user" name="user_id" value="{{$carts->name}}"><br>
        <input type="text" class="food" name="discount_id" value="{{$carts->percentage}}"><br>
        <input type="text" class="quantity" name="quantity" value="{{$carts->quantity}}"><br>
{{--        <input type="text" class="time" name="created_at" value="{{$carts->created_at}}"><br>--}}
        <button type="submit" class="btn btn-info">send </button>
        <br>
    </div>




</form>
