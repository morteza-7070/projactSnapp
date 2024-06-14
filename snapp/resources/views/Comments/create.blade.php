<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Comments/comments.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Comment.store' )}}" method="POST" id="commentCreate">
    @csrf

        <textarea name="content" id="content" cols="30" rows="5"></textarea><br>


    <select name="order_id" id="userName">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select><br>
    <select name="food_id" id="foodName">
        @foreach($foods as $food)
            <option value="{{$food->id}}">{{$food->name}}</option>
        @endforeach
    </select><br>
    <button type="submit" class="btn btn-primary">send Create</button>

</form>
