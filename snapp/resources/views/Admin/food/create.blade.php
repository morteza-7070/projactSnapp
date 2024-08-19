@vite([
              'resources/css/app.css', 'resources/scss/food/Admin.scss',
              'resources/js/app.js',
          ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{ route('Admin.food.store') }}" method="post" enctype="multipart/form-data" id="form">
    @csrf
    <div>

        <input type="text" name="name" class="name" placeholder="Enter Your Name" value="{{ old('name') }}"><br>
        @if($errors->first('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>

        <input type="file" name="ImageFood" class="image"><br>
        @if($errors->first('ImageFood'))
            <span class="text-danger">{{ $errors->first('ImageFood') }}</span>
        @endif
    </div>
    <div>
        <input type="text" name="price" placeholder="Enter Price" class="price" value="{{ old('price') }}"><br>
        @if($errors->first('price'))
            <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
    </div>
    <div>
        <select name="discount_id" class="discount">
            @foreach($discounts as $discount)
                <option value="{{ $discount->id }}" {{ old('discount_id') == $discount->id ? 'selected' : '' }}>
                    {{ $discount->percentage }}
                </option>
            @endforeach
        </select>
        @if ($errors->first('discount_id'))
            <span class="text-danger">{{ $errors->first('discount_id') }}</span>
        @endif
        <br>
    </div>
    <div>
        <textarea name="description" placeholder="Enter Description" class="description">{{ old('description') }}</textarea><br>
        @if($errors->first('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <button type="submit" class="btn btn-info">Create</button>
</form>


