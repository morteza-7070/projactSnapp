
@vite([
              'resources/css/app.css', 'resources/scss/food/Admin.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form action="{{route('Admin.food.update', $foodCategory->id)}}" method="post">
    @csrf
    @method('PUT')

<div>
    <input type="text" name="name"  class="text-black" value="{{ $foodCategory->name}}"><br><br>
    @if($errors->first('name'))
        <span class="text-danger" >{{$errors->first('name')}}</span>
    @endif

</div>
<div>
    <input type="text" name="price"  value={{$foodCategory->price}} class="text-black"><br>
    @if($errors->first('price'))
        <span class="text-danger" >{{$errors->first('price')}}</span>
    @endif

</div>    <br>
<div>
    <td><img src="{{ asset('storage/' . $foodCategory->ImageFood) }}" alt="CategoryFastFoods" ></td>
    <br>
</div>
<div>
    <input type="file" name="ImageFood"><br>
    @if($errors->first('ImageFood'))
        <span class="text-danger" >{{$errors->first('ImageFood')}}</span>
    @endif

</div>
    <div>
        <input type="text" value="{{$foodCategory->description}}" name="description" class="text-dark"><br>
        @if($errors->first('description'))
            <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
   </div>
    <button type="submit" class="btn btn-info" name="submit">ارسال</button>
</form>


