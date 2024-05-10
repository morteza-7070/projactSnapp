
@yield('formRestaurant')

        <div class="form">
            <form action="{{route('seller.form.create')}}" method="post">
                @csrf
                <label for="name" id="name">نام رستوران:
                    <input type="text" name="name" class="name" placeholder="enter nameRestaurant">
                </label><br>
                <lable for="type" id="type">نوع رستوران:
                    <select name="type" id="typeRestaurant">
                        <option name="iranian" id="iranian" class="active" value="iranian">رستوران ایرانی</option>
                        <option name="fastFood" id="fast" class="" value="fast">فست فود </option>
                        <option name="sandwich" id="iranian" class="" value="sandwich">ساندویچی </option>
                        <option name="fried" id="iranian" class="" value="fried">سوخاری </option>

                    </select>
                </lable>
                <br>
                <label for="phoneNumber" id="phone">شماره تماس:
                    <input type="text" name="phoneNumber" class="phone" placeholder="enter phoneNumber">
                </label>
                <br>
                <label for="address" id="address">آدرس رستوران:
                    <input type="text" name="address" class="address" placeholder="enter address">
                </label><br>
                <label for="accountNumber">وارد کردن  شماره حساب:
                    <input type="number" name="accountNumber" id="account" placeholder="enter accountNumber">
                </label>
                <br>
                <button type="submit" class="btn btn-success" name="submit">ارسال</button>
            </form>
        </div>



