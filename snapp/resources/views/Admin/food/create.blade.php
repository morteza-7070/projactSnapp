@vite([
              'resources/css/app.css', 'resources/scss/style.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<form action="{{route('Admin.food.create')}}" method="post">
    @csrf
    <lable id="name"><br>
        <input type="text " name="name" placeholder="enter name" class="name" style="color: #1a202c">
    </lable>
    <br>
    <textarea name="image_food"  cols="30" rows="10" id="create" placeholder="enter url image-food" style="color: #1a202c"></textarea><br>

    <br>
    <input type="text" name="price" placeholder="enter price" class="text-black">
    <br>
    <select name="discount" id="" class="text-black">
        @foreach($discounts as $discount)
            <option {{$discount->id}} >{{$discount->percentage}}</option>

        @endforeach
    </select>

    <input type="submit" name="submit" class="btn btn-info">
</form>


