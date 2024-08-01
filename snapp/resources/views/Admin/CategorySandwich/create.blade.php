<head>
    @vite([
                 'resources/css/app.css', 'resources/scss/Sandwich/sandwich.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div id="form">
    <form action="{{route('Food.sandwich.store')}}" method="post" enctype="multipart/form-data" id="FormCreate">
        @csrf
        <div> <input type="text" name="name" placeholder="Enter Your Name" class="name" value="{{old('name')}}"><br>
            @if ($errors->first('name'))
                <span class="text-danger" >{{ $errors->first('name') }}</span>
            @endif
        </div>
       <br>
        <div>
            <input type="file" name="image" class="image" value="{{old('image')}}"><br>
            @if($errors->first('image'))
                <span class="text-danger">{{$errors->first('image')}}</span>
            @endif

        </div><br>
        <div>
            <input type="text" name="price" placeholder="Enter Price" class="price" value="{{old('price')}}"><br>
            @if($errors->first('price'))
                <span class="text-danger">{{$errors->first('price')}}</span>
            @endif
        </div><br>
       <div>
           <input type="text" name="description" placeholder="Enter Description" class="description" value="{{old('description')}}"><br>
           @if($errors->first('description'))
               <span class="text-danger">{{$errors->first('description')}}</span>

           @endif
       </div><br>
        <select name ="discount_id" class="discount"  ><br>
            @foreach($discounts as $discount)
                <option value="{{ $discount->id }}" {{ old('discount_id') == $discount->id ? 'selected' : '' }}>{{$discount->percentage}}</option>
            @endforeach
            @if($errors->first('discount'))
                <span class="text-danger">{{$errors->first('discount')}}</span>

            @endif
        </select><br>

        @if($errors->has('discount_id'))
            <span class="text-danger">{{ $errors->first('discount_id') }}</span>
        @endif

        <button type="submit" class="btn btn-info">send</button>
    </form>
</div>
