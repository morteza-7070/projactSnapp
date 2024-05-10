{{--@yield('headerForm')--}}
@vite([
          'resources/css/app.css', 'resources/scss/header/header.scss',
          'resources/js/app.js',
      ])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container">
    <div class="header">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">صفحه اصلی</a>
            </li>
            <li class="nav-item">
                <a href="{{route('Admin.index')}}" class="nav-link"> رستوران</a>

            </li>
            <li class="nav-item">
                <a href="{{route('Admin.food.index')}}" class="nav-link"> غذا</a>

            </li>
        </ul>
    </div>
</div>
