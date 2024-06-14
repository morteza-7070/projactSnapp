
<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Comments/comments.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <a href="{{route('Comment.create')}}" class="btn btn-secondary">Create</a>
    @foreach($comments as $comment)
        <table>
            <thead>
            <tr>
                <th>محتوا</th>
                <th>نام غذا</th>
                <th>نام کاربر</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="content" >{{$comment->content}}</td>
                <td class="name">{{$comment->food->name}}</td>
                <td class="user_name">{{$comment->order->users->name}}</td>

                <td>
                    <form action="{{route('Comment.destroy',$comment->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Comment.edit',$comment->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-info">EDIT</button>

                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach
</div>
