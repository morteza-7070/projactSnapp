
<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/Sandwich/sandwich.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

    <form action="{{route('Food.sandwich.update',$sandwich->id)}}" method="post" enctype="multipart/form-data" id="FormEditSandwich">
        @csrf
        @method('PUT')
        <div>
            <input type="text" value="{{$sandwich->name}}" name="name" class="name"><br>
            @if ($errors->first('name'))
                <span class="text-danger" >{{ $errors->first('name') }}</span>
            @endif
        </div> <br>
        <div id="img"> <img src="{{ asset('storage/' . $sandwich->image) }}" alt="CategorySandwich"  class="img"><br></div>
       <div>
           <input type="file" name="image" class="image">
           @if ($errors->first('image'))
               <span class="text-danger" >{{ $errors->first('image') }}</span>
           @endif
       </div><br>
       <div>
           <input type="text" name="price" value="{{$sandwich->price}}" class="price"><br>
           @if ($errors->first('price'))
               <span class="text-danger" >{{ $errors->first('price') }}</span>
           @endif
       </div><br>
        <div>
            <input type="text" name="description" value="{{$sandwich->description}}" class="description"><br>
            @if ($errors->first('description'))
                <span class="text-danger" >{{ $errors->first('description') }}</span>
            @endif
        </div><br>
        <button type="submit" class="btn btn-success mt-3">SendEdit</button>

    </form>


