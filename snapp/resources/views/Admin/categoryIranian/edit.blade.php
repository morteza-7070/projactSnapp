<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/iranian/Iranian.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Food.iranian.update',$iran->id)}}" method="post" enctype="multipart/form-data" id="EditForm" >
    @csrf
    @method('PUT')
   <div class="formEdit">
     <div>
         <input type="text" name="name" value="{{$iran->name}} {{old('name')}}" class="name" >
         @if ($errors->first('name'))
             <span class="text-danger" >{{ $errors->first('name') }}</span>
         @endif<br>
     </div>

       <br>
      <div>
          <input type="file" name="image" class="image"><br>
          @if ($errors->first('image'))
              <span class="text-danger" >{{ $errors->first('image') }}</span>
          @endif
      </div>
       <br>

       <div>
           <input type="text" name="price" value="{{$iran->price}}{{old('price')}}" class="price"><br>
           @if ($errors->first('price'))
               <span class="text-danger" >{{ $errors->first('price') }}</span>
           @endif
       </div>
       <br>
       <div>
           <textarea name="description" class="description" cols="30" rows="10"  >{{$iran->description}}</textarea><br>
           @if ($errors->first('description'))
               <span class="text-danger" >{{ $errors->first('description') }}</span>
           @endif
       </div>
       <br>
       <button type="submit" name="submit" class="btn btn-success" >send</button>
   </div>
</form>
