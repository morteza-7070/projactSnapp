<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Report/index.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="container">
    <a href="{{route('Report.create')}}" class="btn btn-secondary"> ایجاد گزارش</a>
    @foreach($reports as $report)
        <table>
            <thead>
            <tr>
                <th>عنوان</th>
                <th>متن گزارش</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$report->title}}</td>
                <td>{{$report->description}}</td>
                <td>
                    <form action="{{route('Report.destroy',$report->id)}}" method="POST" id="delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('Report.edit' ,$report->id)}}" method="POST" id="edit">
                        @csrf
                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    @endforeach

</div>

