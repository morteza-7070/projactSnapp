



<head>
    @vite([
       'resources/css/app.css', 'resources/scss/food/Admin.scss',
       'resources/js/app.js',
   ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>



<form action="{{route('Admin.update',$category->id)}}" method="POST" id="edit" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" placeholder="name" value="{{$category->name}}" class="editName"><br>
    <div class="image">
        <img src="{{ asset('storage/' . $category->image_restaurant) }}" alt="Banner Image"  class="img">
    </div>
    <input type="file" name="image_restaurant" >
    <button type="submit" class="btn btn-info" name="submit" id="btn">ارسال</button>
</form>

