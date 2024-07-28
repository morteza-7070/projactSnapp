<div class="container">
    <form action="{{route('Food.fastFood.update',$fast->id)}}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <input type="text" name="name"  value="{{$fast->name}}">
        <img src="{{ asset('storage/' . $fast->image) }}" alt="CategoryFastFood"  class="img">
        <input type="file" name="image">
        <input type="text" value="{{$fast->price}}">
        <input type="text" value="{{$fast->description}}">
        <input type="text" value="{{$fast->discount->percentage}}">
        <button type="submit">send</button>
    </form>
</div>
