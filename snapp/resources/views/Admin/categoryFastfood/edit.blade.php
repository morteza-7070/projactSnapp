<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/fastfood/Fastfood.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <h1>ویرایش فرم</h1>
    <form action="{{route('Food.fastFood.update',$fast->id)}}" method="post" enctype="multipart/form-data"  id="EditForm">
        @csrf
        @method('PUT')
       <div> <input type="text" name="name"  value="{{$fast->name}}" class="name"><br>
          @if($errors->first('name'))
              <span class="text-light">{{$errors->first('name')}}</span>
          @endif
           <br></div>
        <br>
       <div id="img"> <img src="{{ asset('storage/' . $fast->image) }}" alt="CategoryFastFood"  class="img"><br>

       </div>
        <br>
        <div><input type="file" name="image" class="image"><br>
            @if($errors->first('image'))
                <span class="text-light">{{$errors->first('image')}}</span>
            @endif
        </div>
        <br>
       <div> <input type="text" value="{{$fast->price}}" class="price" name="price"><br>
           @if($errors->first('price'))
               <span class="text-light">{{$errors->first('price')}}</span>
           @endif
       </div>
        <div>
            <input type="text" value="{{$fast->description}}"
                   class="description" placeholder="enter description" name="description"><br>
            @if($errors->first('description'))
                <span class="text-light">{{$errors->first('description')}}</span>
            @endif
        </div>


        <button type="submit" class="btn btn-success mt-3">send</button>
        <br>
    </form>
</div>
