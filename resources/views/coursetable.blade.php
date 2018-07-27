                
<div  id="result">
  <div class="col-md-6">
       <section class="panel">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Statistics</strong></h2>
           </div>
            <div class="panel-body">
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Course Name</th>
              <th scope="col">Duration</th>
              <th scope="col">Semester</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1 ?>
            @foreach($courses as $course)
            <tr>
              <th scope="row"> {{$i++}}</th>
              <td>{{$course->name}}</td>
              <td>{{$course->duration}}</td>
              <td>{{$course->semester}}</td>
              <td>

                <button class="btn-delete btn btn-info btn-sm" data-id={{$course->id}} >Delete</button>
                

                <button data-course_id="{{ $course->id }}" data-course_name="{{$course->name}}" data-course_duration="{{$course->duration}}"  data-academic_year="{{$course->academic_year}}"  data-semester="{{$course->semester}}" class="edit-course btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Edit</button>

              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
           </div>
           </section>
  </div>
</div>
 