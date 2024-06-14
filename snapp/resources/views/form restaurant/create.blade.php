<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/formRestaurant/formRestaurant.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
@yield('formRestaurant')

<div id="form">
    <form action="{{route('seller.store')}}" method="post" class="form">
        @csrf
       <div class="bodyForm">
           <label for="name" id="name">
               <input type="text" name="name" class="name" placeholder="enter nameRestaurant">
           </label><br>
           <lable for="type" id="type">
               <select name="type" id="typeRestaurant">
                   <option name="iranian" id="iranian" class="active" value="iranian">رستوران ایرانی</option>
                   <option name="fastFood" id="fast"  value="fast">فست فود </option>
                   <option name="sandwich" id="iranian"  value="sandwich">ساندویچی </option>
                   <option name="fried" id="iranian"  value="fried">سوخاری </option>

               </select>
           </lable>
           <br>
           <label for="phoneNumber" id="phone">
               <input type="text" name="phoneNumber" class="phone" placeholder="enter phoneNumber">
           </label>
           <br>
           <label for="address" id="address">
               <input type="text" name="address" class="address" placeholder="enter address">
           </label><br>
           <label for="accountNumber" id="account">
               <input type="number" name="accountNumber" class="account" placeholder="enter accountNumber">
           </label>
           <br>
           <button type="submit" class="btn btn-success" name="submit">ارسال</button>
       </div>
    </form>
</div>



