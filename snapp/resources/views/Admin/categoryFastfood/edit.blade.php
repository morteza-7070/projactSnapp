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
        <input type="text" name="name"  value="{{$fast->name}}" class="name"><br>
       <div id="img"> <img src="{{ asset('storage/' . $fast->image) }}" alt="CategoryFastFood"  class="img"><br></div>
        <input type="file" name="image" class="image"><br>
        <input type="text" value="{{$fast->price}}" class="price" name="price"><br>
        <input type="text" value="{{$fast->description}}" class="description" placeholder="enter description" name="description"><br>
{{--        <input type="text" value="{{$fast->discount->percentage}}" class="percentage" name="discount_id"><br>--}}
        <button type="submit" class="btn btn-success mt-3">send</button>
        <br>
    </form>
</div>
