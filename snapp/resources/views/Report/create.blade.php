
<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Report/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<head>
<form action="{{route('Report.store')}}" method="POST" id="formCreate">
    @csrf
    <div class="formCreate">
        <input type="text" name="title" id="title" placeholder="عنوان گزارش"><br>
        <textarea name="description" id="description" cols="23" rows="5" placeholder="متن گزارش"></textarea><br>
        <button class="btn btn-primary" type="submit">send create</button>
    </div>
</form>
