<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/iranian/FoodIranian.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Food.iranian.update',$iran->id)}}" method="post" enctype="multipart/form-data" id="EditForm" >
    @csrf
    @method('PUT')
   <div class="formEdit">
       <input type="text" name="name" value="{{$iran->name}}" class="name" ><br>

       <br>
       <input type="file" name="image" class="image"><br>

       <input type="text" name="price" value="{{$iran->price}}" class="price"><br>
       <textarea name="description" class="description" cols="30" rows="10" >{{$iran->description}}</textarea><br>
       <input type="text" value="{{$iran->discount->percentage}}" class="discount"><br>

       <button type="submit" name="submit" class="btn btn-success" >send</button>
   </div>
</form>
