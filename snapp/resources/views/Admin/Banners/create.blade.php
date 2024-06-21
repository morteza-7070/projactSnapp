<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Banners/banners.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form action="{{route('Admin.banner.create')}}" method="post" id="banner" enctype="multipart/form-data ">
    @csrf
    <lable>
{{--        <textarea name="image_banners" id="" cols="30" rows="10"></textarea>--}}
        <input type="file" name="file">
        <br>
        <input type="file" name="images">
        <button type="submit" class="btn btn-info">send</button>
    </lable>
</form>

