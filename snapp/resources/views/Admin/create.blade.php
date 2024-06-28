
<head>
    @vite([
       'resources/css/app.css', 'resources/scss/food/Admin.scss',
       'resources/js/app.js',
   ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<form action="{{route('Admin.create')}}" method="post" id="form" enctype="multipart/form-data">
    @csrf

    <lable id="name">name:<br>
        <input type="text " name="name" placeholder="enter name" class="name">
    </lable>
    <div class="image">
        <input type="file" name="image_restaurant">
    </div>
    <br>
    <input type="submit" name="submit" class="btn btn-info">
</form>

