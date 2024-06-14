<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/formRestaurant/formRestaurant.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<form action="{{ route('seller.update', $forms->id) }}" method="POST" id="formEdit">
    @csrf
    @method('PUT')
    <input type="text" class="name" name="name" value="{{ $forms->name }}"><br>
    <select name="type" id="order" class="nameUser">
        <option value="fast">فست فود</option>
        <option value="iranian">ایرانی</option>
        <option value="sandwich">ساندویچی</option>
        <option value="fried">سوخاری</option>
    </select><br>
    <input type="text" class="phone" name="phoneNumber" value="{{ $forms->phoneNumber }}">
    <br>
    <input type="text" name="address" class="address" value="{{ $forms->address }}"><br>
    <input type="number" name="accountNumber"  class="account" value="{{ $forms->accountNumber }}"><br>
    <button type="submit" class="btn btn-primary" name="submit">Send</button>
</form>


