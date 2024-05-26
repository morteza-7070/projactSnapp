@foreach($discount1->category as $dis)
    <table>
        <thead>
        <tr>
            <th>name</th>
            <th>url</th>
            <th>discount</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$dis->name}}</td>
            <td>{{$dis->url}}</td>
            <td>{{$dis->discount->percentage}}</td>

        </tr>
        </tbody>
    </table>
@endforeach
