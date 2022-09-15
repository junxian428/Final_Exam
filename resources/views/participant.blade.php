<h1>WorkShop List</h1>
@foreach ($workshops as $workshop)
    <p> {{$workshop->id}}   {{$workshop->name}}</p>    
@endforeach

<h1>Participant List</h1>
<table>
@foreach ($participants as $participants) 
    <p><tr> {{$participants->id}}  
         <td>{{$participants->name}} </td>
         <td>{{$participants->email}} </td>
         <td>{{$participants->phoneNo}}  </td>
         <td>{{$participants->address}} </td>
         <td>{{$participants->workshopID}}</td>
         <button type="submit" class="btn btn-primary" style="display:inline; "> 
         <a href = 'delete/{{ $participants->id }}' style="text-decoration:none; color:black;">Delete</a></button>
         <br>
</tr>
    </p>    
@endforeach
</table>
<h1>Create Workshop</h1>
<form name="workshop" id="workshop" method="post" action="{{route('workshop.create')}}">
       @csrf
        <div class="form-group">
         <label for="phone">workshop id</label>
          <input type="text" id="workshopid" name="workshopid" class="form-control" required="">
          <label for="phone">workshop name</label>
          <input type="text" id="workshopname" name="workshopname" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h1>Create Participants</h1>
<form name="workshop" id="workshop" method="post" action="{{route('participant.create')}}">
       @csrf
      
        <div class="form-group">
            
         <label for="phone">Participant Id</label>

        <input type="text" id="id" name="id" class="form-control" required="">

         <label for="phone">Participant Name</label>
          <input type="text" id="1" name="1" class="form-control" required="">
          <br>
          <label for="phone">Participant Email</label>
          <input type="text" id="2" name="2" class="form-control" required="">
          <br>

          <label for="phone">Participant Phone no</label>
          <input type="text" id="3" name="3" class="form-control" required="">
          <br>

          <label for="phone">Participant address</label>
          <input type="text" id="4" name="4" class="form-control" required="">
          <br>

          <label for="phone">Workshop ID</label>
          <input type="text" id="5" name="5" class="form-control" required="">
          <br>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>


