@vite([
              'resources/css/app.css', 'resources/scss/Discount/discount.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form action="{{route('Admin.discount.update',$discount->id)}}" method="post" id="edit">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{$discount->name}}" ><br>
    <input type="text" name="percentage" value="{{$discount->percentage}}"><br>
    <button type="submit" name="submit" class="btn btn-success" >send</button>
</form>

