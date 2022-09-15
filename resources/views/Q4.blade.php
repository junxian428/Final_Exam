<h1>Warehouse</h1>
<table>
@foreach ($participants as $participant) 
    <p> <tr> 
        {{$participant->id}}  
         <td>{{$participant->name}} </td>
         <td>{{$participant->email}} </td>
         <td>{{$participant->phoneNo}}  </td>
         <td>{{$participant->address}} </td>
         <td>{{$participant->workshopID}}</td>
         <button type="submit" class="btn btn-primary" style="display:inline; "> 
         <a href = 'delete/{{ $participants->id }}' style="text-decoration:none; color:black;">Delete</a></button>
         <br>
</tr>
    </p>    
@endforeach
</table>