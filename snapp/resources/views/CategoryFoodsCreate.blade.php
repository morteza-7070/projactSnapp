<form action="{{route('Cart.store1')}}" method="POST">
    @csrf
    <input name="name">
    <input name="price">
    <input name="user-id">
    <button type="submit">send</button>
</form>
