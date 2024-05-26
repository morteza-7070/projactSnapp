
@foreach($restaurant->category as $food)

   <table>
       <thead>
       <tr>

           <th>name</th>
           <th>image</th>
       </tr>
       </thead>
       <tbody>
       <tr>

           <td>{{$food->name}}</td>
           <td><img src="{{$food->url}}" alt=""></td>
           <td>{{$food->discount->percentage}}</td>
{{--           <td>{{$discounts->percentage}}</td>--}}
       </tr>
       </tbody>
   </table>
@endforeach
