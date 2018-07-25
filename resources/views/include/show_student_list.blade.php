 <table class="table table-bordered table-hover" >
    <thead>
      <tr>
        <th class="success">#</th>
        <th class="success">Name</th>
        <th class="success">Email</th>
        <th class="success">Student Contact</th>
        <th class="success">Father Name</th>
        <th class="success">Course</th>
        <th class="success">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($admissions as $admission)

      <tr>
        <td>{{$admission->id}} </td>
        <td>{{$admission->student_name}} </td>
        <td>{{$admission->email}} </td>
        <td>{{$admission->student_contact}} </td>
        <td>{{$admission->father_name}} </td>
        <td>{{$admission->course_id}} </td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">View Detail</a></li>
    <li><a href="#">Add Fee</a></li>
    <li><a href="#">Admission Update</a></li>
    <li><a href="#">Fee Update </a></li>
  </ul>
</div></td>
      </tr>
      @endforeach
    </tbody>
  </table>