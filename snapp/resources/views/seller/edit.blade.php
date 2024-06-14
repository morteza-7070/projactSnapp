<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/seller/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Seller.seller.update',$sellers->id)}}" method="POST" id="EditForm">
    @csrf
    @method('PUT')
    <input type="text" name="name" class="name" placeholder="enter yourName" value="{{$sellers->name}}"><br>
    <input type="text" name="email" class="email" placeholder="enter yourEmail" value="{{$sellers->email}}"><br>
    <input type="text" name="phoneNumber" class="phone" placeholder="enter phone" value="{{$sellers->phoneNumber}}"><br>
    <input type="text" name="restaurant_name" class="restaurant" placeholder="enter Address" value="{{$sellers->restaurant_name}}"><br>
    <input type="text" name="address_seller" class="address"  placeholder="enter address restaurant" value="{{$sellers->address_seller}}"><br>
    <button type="submit" class="btn btn-primary">send</button>
</form>

