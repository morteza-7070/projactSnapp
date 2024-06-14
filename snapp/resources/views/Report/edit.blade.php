<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Report/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Report.update',$reports->id)}}" method="POST" id="Edit">
    @csrf
    @method('PUT')
    <div class="formEdit">
        <input type="text" name="title" value="{{$reports->title}}" class="title"><br>
        <textarea cols="25" rows="8" name="description"  value="{{$reports->id}}" class="description">{{$reports->description}}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">sendEdit</button>
    </div>
</form>
