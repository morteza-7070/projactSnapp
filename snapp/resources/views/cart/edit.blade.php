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
{{--        <input type="text" class="user" name="user_id" value="{{$carts->users->name}}"><br>--}}
        <select name="user_id" id="">
            @foreach($users as $user)
                <option name="user" value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        <select name="food_id" id="">
            @foreach($foods as $food)
                <option value="{{$food->id}}">{{$food->name}}</option>
            @endforeach
        </select> <br>
        <select name="food_id" id="">
            @foreach($foods as $food)
                <option value="{{$food->id}}">{{$food->price}}</option>
            @endforeach
        </select><br>
        <input type="text" class="quantity" name="quantity" value="{{$carts->quantity}}" ><br>
        <button type="submit" class="btn btn-info">send </button>
        <br>
    </div>




</form>
