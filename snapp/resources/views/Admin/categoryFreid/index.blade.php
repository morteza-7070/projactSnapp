<head>
    @vite([
                  'resources/css/app.css', 'resources/scss/fried/fried.scss',
                  'resources/js/app.js',
              ])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
    <div class="link">
        <a href="{{route('Fried.create')}}">create</a>
    </div>
   @foreach($freids as $freid)
       <table>
           <thead>
           <tr>
               <th></th>
           </tr>
           </thead>
           <tbody>
           <tr>
               <td>{{$freid->name}}</td>
           </tr>
           </tbody>
       </table>
   @endforeach
</div>
