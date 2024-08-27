<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/seller/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <form action="{{route('api.seller.store')}}" method="POST" id="create">
        @csrf
        <div class="create">
            <input type="text" name="name" placeholder="enter yourName" class="name"><br>
            <input type="text" name="email" placeholder="enter yourEmail" class="email"><br>
            <input type="text" name="phoneNumber" placeholder="enter phone" class="phone"><br>
            <input type="text" name="restaurant_name" placeholder="enter name restaurant" class="restaurant"><br>


            <input type="text" name="address_seller"  placeholder="enter address restaurant" class="address"><br>
            <button type="submit" class="btn btn-primary">send</button>
        </div>
        <br>
        <br>
    </form>
</div>
