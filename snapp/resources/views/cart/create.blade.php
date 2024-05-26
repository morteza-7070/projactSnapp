<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Cart/cart.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Cart.store')}}" method="POST" id="create">
    @csrf
   <div class="create">
       <select name="user_id" class="user">
           @foreach($users as $user)
               <option value="{{$user->id}}">{{$user->name}}</option>

           @endforeach
       </select><br>
       <select name="food_id" class="food">
           @foreach($foods as $food)
               <option value="{{$food->id}}">{{$food->name}}</option>

           @endforeach
       </select><br>
       <input type="number" name="quantity" class="quantity"><br>
       <button type="submit" class="btn btn-info">send</button>
   </div>
</form>
