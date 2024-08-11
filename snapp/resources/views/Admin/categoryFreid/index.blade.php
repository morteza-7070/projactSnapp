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
   @foreach($Crackers as $fried)
       <table>
           <thead>
           <tr>
               <th>نام غذا</th>
               <th>عکس</th>
               <th>قیمت</th>
               <th>درصد تخفیف</th>
               <th>قیمت با احتساب تخفیف</th>
               <th>توضیحات</th>

           </tr>
           </thead>
           <tbody>
           <tr>
               <td>{{$fried->name}}</td>
               <td><img src="{{ asset('storage/' . $fried->image) }}" alt="CategoryFastFoods" ></td>
               <td>{{$fried->price}}</td>
               <td>{{$fried->discount->percentage}}٪</td>
               <td>{{$fried->price * ($fried->discount->percentage / 100)}}</td>
               <td>{{$fried->description}}</td>
               <td>
                   <form action="{{route('Fried.destroy', $fried->id)}}" method="post">
                       @csrf
                       @method('DELETE')
                       {{$fried->text}}
                       <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
               </td>
               <td>
                   <form action="{{route('Fried.edit', $fried->id)}}" method="get">
                       @csrf
                       <button type="submit" class="btn btn-primary">Edit</button>
                   </form></td>


           </tr>
           </tbody>
       </table>
   @endforeach
</div>
