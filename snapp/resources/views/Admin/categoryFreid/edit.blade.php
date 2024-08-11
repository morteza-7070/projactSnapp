
<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/fried/fried.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<h2>FormEdit</h2>
<form action="{{route('Fried.update',$fried->id)}}" method="post" enctype="multipart/form-data" id="EditForm">
    @csrf
    @method('PUT')
<div>
    <input type="text"  value="{{$fried->name}}{{old('name')}}" name="name" class="name"><br>
    @if($errors->first('name'))
        <span class="text-info">{{$errors->first('name')}}</span>
    @endif

</div>
    <div>
    <td>
        <img src="{{ asset('storage/' . $fried->image) }}" alt="CategoryFastFoods"  id="image"></td>

    </div>

</div>
    <div>
        <input type="file" name="image" class="image" ><br>
        @if($errors->first('image'))
            <span class="text-danger">{{$errors->first('image')}}</span>
        @endif
    </div>
<div>
    <input type="text" value="{{$fried->price}}{{old('price')}}" name="price" class="price"><br>
    @if($errors->first('price'))
        <span class="text-danger">{{$errors->first('price')}}</span>
    @endif
</div>
    <div>
        <input type="text" value="{{$fried->description}}{{old('description')}} " name="description" class="description"><br>
        @if($errors->first('description'))
            <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">SendEdit</button>
</form>
