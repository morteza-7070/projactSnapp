<form action="{{route('Food.iranian.update',$iran->id)}}" method="POST" >
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$iran->name}}" ><br>
   <textarea name="image_food" id="img" cols="30" rows="10"  >{{$iran->image_food}}</textarea><br>
   <input type="text" name="price" value="{{$iran->price}}">
    <textarea name="description" id="img" cols="30" rows="10" >{{$iran->description}}</textarea><br>
    <input type="text" value="{{$iran->discount->percentage}}">

    <button type="submit" name="submit" class="btn btn-success" >send</button>
</form>
