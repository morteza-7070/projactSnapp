<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/iranian/Iranian.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Food.iranian.store')}}" method="POST" id="FormCreate" enctype="multipart/form-data">
    @csrf
   <div>
       <label for="name" id="name">

           <input type="text" name="name" placeholder="enter nameFood" class="name"><br>
           @if($errors->first('name'))
               <span class="text-danger">{{$errors->first('name')}}</span>
           @endif

       </label><br>
   </div>
    <input type="file" name="image" class="image"><br>
    <label for="price">
        <input type="text" name="price" placeholder="enter price" id="price">
    </label><br>

    <label for="description">
        <textarea name="description" id="description" placeholder="description"></textarea>
    </label><br>
    <select name="discount_id">
        @foreach($discounts as $discount)
            <option value="{{$discount->id}}" {{old('discount_id') == $discount->id ? 'selected' : '' }}>{{$discount->percentage}}</option>


        @endforeach
    </select><br>
    <button type="submit" class="btn btn-primary mt-3">send</button>

</form>
