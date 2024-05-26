@foreach($foods->category as $food)

    <table>
        <thead>
        <tr>

            <th>name</th>
            <th>image</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>{{$food->name}}</td>
            <td><img src="{{$food->url}}" alt=""></td>
            <td>{{$food->discount->percentage}}</td>
{{--            <td>{{$food->user->name}}</td>--}}
{{--            <td class="form-delete">--}}
{{--                <form action="{{route("Admin.destroy",$food->id)}}" method="post" class="form-delete">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    {{$food->text}}--}}
{{--                    <button type="submit" class="btn btn-danger" id="btn-delete">delete</button>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--            <td class="form-edit">--}}
{{--                <form action="{{route("Admin.edit",$food->id)}}" method="post">--}}
{{--                    @csrf--}}


{{--                    <button type="submit" class="btn btn-success" id="edit">edit</button>--}}
{{--                </form>--}}
{{--            </td>--}}
        </tr>
        </tbody>
    </table>
@endforeach
{{--<h1>{{$foods->discount->percentage}}</h1>--}}
