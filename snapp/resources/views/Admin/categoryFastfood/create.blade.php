<head>
    @vite([
                 'resources/css/app.css', 'resources/scss/fastfood/Fastfood.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{ route('Food.fastFood.store') }}" method="POST" id="CreateForm" class="mt-4" enctype="multipart/form-data">
    @csrf
    <label for="name">
        <input type="text" name="name" placeholder="enter nameFood" id="name">
    </label><br>

    <input type="file" id="image" name="image"><br>
    <label for="price">
        <input type="text" name="price" placeholder="enter price" id="price">
    </label><br>
    <label for="description">
        <textarea name="description" id="description" placeholder="description"></textarea>
    </label><br>
    <select name="discount_id" class="discount">
        @foreach($discounts as $discount)
            <option value="{{ $discount->id }}" >{{ $discount->percentage }} </option>
        @endforeach
    </select><br>


    <button type="submit" class="btn btn-primary mt-3">send</button>
</form>
