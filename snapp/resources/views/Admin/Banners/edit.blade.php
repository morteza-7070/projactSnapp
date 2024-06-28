
<head>
    @vite([
       'resources/css/app.css', 'resources/scss/Banners/banners.scss',
       'resources/js/app.js',
    ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>





<form action="{{ route('Admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data" id="FormEdit">
    @csrf
    @method('PUT')
    <div class="image">
        <img src="{{ asset('storage/' . $banner->file) }}" alt="Banner Image"  class="img">
    </div>
    <input type="file" name="file">
    <button type="submit" class="btn btn-info">Update</button>
</form>



