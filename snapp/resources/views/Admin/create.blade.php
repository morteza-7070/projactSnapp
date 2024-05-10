
<head>
    @vite([
       'resources/css/app.css', 'resources/scss/food/Admin.scss',
       'resources/js/app.js',
   ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<form action="{{route('Admin.create')}}" method="post" id="form">
    @csrf
    <textarea name="image_restaurant" cols="50" rows="10" style="color: #1a202c" class="image-restaurant" placeholder="enter url image"></textarea><br>

    <lable id="name">name:<br>
        <input type="text " name="name" placeholder="enter name" class="name">
    </lable>
    <br>
    <input type="submit" name="submit" class="btn btn-info">
</form>

