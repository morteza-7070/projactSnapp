<form action="{{route('Seller.seller.update',$sellers->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="enter yourName" value="{{$sellers->name}}">
    <input type="text" name="email" placeholder="enter yourEmail" value="{{$sellers->email}}">
    <input type="text" name="phoneNumber" placeholder="enter phone" value="{{$sellers->phoneNumber}}">
    <input type="text" name="restaurant_name" placeholder="enter Address" value="{{$sellers->restaurant_name}}">
    <input type="text" name="address_seller"  placeholder="enter address restaurant" value="{{$sellers->address_seller}}">
    <button type="submit" class="btn btn-primary">send</button>
</form>

