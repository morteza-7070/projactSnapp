
<head>
    @vite([
       'resources/css/app.css', 'resources/scss/Banners/banners.scss',
       'resources/js/app.js',
    ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>



<form action="{{route('Admin.banner.update',$banners->id)}}" method="post">
    @csrf
    @method('PUT')

    <textarea name="image_banners" cols="30" rows="10">{{$banners->image_banners}}</textarea>
    <input type="file" value="{{$banners->images}}">

    <button type="submit" class="btn btn-info" name="submit">ارسال</button>
</form>

