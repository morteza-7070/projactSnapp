
<head>
    @vite([
       'resources/css/app.css', 'resources/scss/Banners/banners.scss',
       'resources/js/app.js',
    ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>




{{--<form action="{{ route('Admin.banner.update', $banners->id) }}" method="POST" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    @method('PUT')--}}
{{--    {{$banners->text}}--}}
{{--    <input type="file" name="file" value="{{ $banners->file}}">--}}

{{--    <button type="submit" class="btn btn-info">ارسال</button>--}}
{{--</form>--}}
<form action="{{ route('Admin.banner.update', $banners->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>{{ $banners->file }}</div>
    <input type="file" name="file">

    <button type="submit" class="btn btn-info">ارسال</button>
</form>



