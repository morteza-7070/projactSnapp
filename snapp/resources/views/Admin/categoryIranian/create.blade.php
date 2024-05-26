<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/iranian/FoodIranian.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<form action="{{route('Food.iranian.create')}}" method="POST" id="form">
    @csrf
    <label for="name">
        <input type="text" name="name" placeholder="enter nameFood" id="name">
    </label><br>
    <label for="image">
        <textarea name="image_food" id="img" placeholder="enter url image Food Iranian"></textarea>
    </label><br>
    <label for="price">
        <input type="text" name="price" placeholder="enter price" id="price">
    </label><br>
    <label for="description">
        <textarea name="description" id="description" placeholder="description"></textarea>
    </label><br>
    <select name="discount_id">
        @foreach($discounts as $discount)
            <option value="{{$discount->id}}">{{$discount->percentage}}</option>
{{--            <input type="hidden" name="discount_id" value="1">--}}
        @endforeach
    </select><br>
    <button type="submit" class="btn btn-primary">send</button>

</form>
