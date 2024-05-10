<head>
@vite([
              'resources/css/app.css', 'resources/scss/style.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form action="{{route('Admin.discount.create')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter name"  style="margin-top: 2rem ;color: #1a202c"><br>

    <input type="text" name="percentage" placeholder="enter percentage" style="margin-top: 2rem;color: #1a202c"><br>
    <input type="submit" class="btn btn-info" name="submit">
</form>
