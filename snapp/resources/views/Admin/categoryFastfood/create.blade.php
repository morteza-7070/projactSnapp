<head>
    @vite([
                 'resources/css/app.css', 'resources/scss/fastfood/Fastfood.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{ route('Food.fastFood.store') }}" method="POST" id="CreateForm" class="mt-4" enctype="multipart/form-data">
    @csrf
   <div>
       <label for="name">
           <input type="text" name="name" placeholder="enter nameFood" id="name">
       </label><br>
       @if($errors->first('name'))
           <span class="text-light">{{$errors->first('name')}}</span>
       @endif
   </div>

   <div>
       <input type="file" id="image" name="image" value="{{old('name')}}"><br>
       @if($errors->first('image'))
           <span class="text-light">{{$errors->first('image')}}</span>
       @endif
   </div>
    <div>
        <label for="price">
            <input type="text" name="price" placeholder="enter price" id="price" value="{{old('price')}}">
        </label><br>
        @if($errors->first('price'))
            <span class="text-light">{{$errors->first('price')}}</span>
        @endif
    </div>
    <div>
        <label for="description">
            <textarea name="description" id="description" placeholder="description" value="{{old('description')}}"></textarea>
        </label><br>
        @if($errors->first('description'))
            <span class="text-light">{{$errors->first('description')}}</span>
        @endif
    </div>
   <div>
       <select name="discount_id" class="discount">
           @foreach($discounts as $discount)
               <option value="{{ $discount->id }}" {{old('discount_id') ==$discount->id ?'selected': ""}} >{{ $discount->percentage }} </option>
           @endforeach
       </select><br>
       @if($errors->first('discount_id'))
           <span class="text-light">{{$errors->first('discount_id')}}</span>
       @endif
   </div>


    <button type="submit" class="btn btn-primary mt-3">send</button>
</form>
