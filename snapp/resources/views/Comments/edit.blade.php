<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Comments/comments.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{ route('Comment.update', $comments->id) }}" method="POST" id="CommentEdit">
    @csrf
    @method('PUT')



    <textarea name="content" class="content">{{ $comments->content }}</textarea><br>


    <select name="order_id" id="order" class="nameUser">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br>


    <select name="food_id" id="food" class="nameFood">
        @foreach($foods as $food)
            <option value="{{ $food->id }}">{{ $food->name }}</option>
        @endforeach
    </select><br>

    <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
</form>


