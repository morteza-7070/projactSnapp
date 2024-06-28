<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Banners/banners.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{ route('Admin.banner.store') }}" method="POST" enctype="multipart/form-data" id="FormCreate">
    @csrf
    <input type="file" name="file" class="file"><br>
    <button type="submit" class="btn btn-dark">Upload</button>
</form>
