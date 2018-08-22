@if(!is_null($res->first()))
<div  id="result">
  <div class="col-md-12">
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Contact</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th scope="col">Father Name</th>
              <th scope="col">Course</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php $i=1 ?>
               
            @foreach($res as $student)
            <tr>

              {{-- <th scope="row"> {{$i++}}</th> --}}
              <td>{{$i++}}</td>
              <td>{{$student->id}}</td>
              <td>{{$student->student_name}}</td>
              <td>{{$student->student_contact}}</td>
              <td>{{$student->gender}}</td>
              <td>{{$student->email}}</td>
              <td>{{$student->father_name}}</td>
              <td>{{$student->course->name}}</td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('studentdetail',['id'=>$student->id]) }}">View Detail</a></li>
                    <li><a href="{{ route('feespay',['id'=>$student->id] ) }}">Fee Pay</a></li>
                    <li><a href="{{ route('studentupdate',['id'=>$student->id]) }}">Update</a></li>
                    
                  </ul>
                </div>

              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
  </div>
</div>
@else
<center>
<label>No Matched Data Found</label>
</center>
@endif
 