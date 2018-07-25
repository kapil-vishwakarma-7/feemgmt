@extends('layouts.header')
@section('body')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Course Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Add/Update</li>
              <li><i class="fa fa-files-o"></i>Courses</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
         <div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Add Courses
              </header>
              <table class="table table-striped" id="crud_table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Course Duration</th>
                    <th>Semester</th>

                  <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <form  enctype="multipart/form-data" method="post" id="course">
                    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
              <td>1</td>
                    <td><input type="text" class="form-control required course" name="course[]" id="course_1"></td>
                    <td><input type="text" class="form-control required duration" name="duration[]" id="duration_1"></td> 
                    
                    <td> <select class="form-control semester" id="semester_1" name="semester[]">
                      <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                    </select></td>
                  <td></td>
                 
                  </tr>

                </tbody>
              </table>
              <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button"  id="save" class="btn btn-info">Save</button>
    </div>
 </form>
            </section>
          </div>
  
  @include('coursetable')

</div>
       
        <!-- page end-->
      </section>
    </section>
    
  </section>
  <!-- container section end -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Coures</h4>
        </div>
        <div class="modal-body">
         <form id="course_update">
          <input class="form-control" type="hidden" id="course_id" name="id" >
          {{csrf_field()}}
           <label>Course Name :</label>
           <input class="form-control" type="text" id="course_name" name="name" >
            <label>Duration :</label>
           <input class="form-control" type="text" id="course_duration" name="duration" >
           <label>Semester</label>
           <select class="form-control"  id="semester" name="semester">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
             <option value="6">6</option>
             <option value="7">7</option>
            <option value="8">8</option>
           </select> 
           <br>
           <center>
           <button class="btn btn-primary" id="update">update</button>
           </center>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</body>
<script type="text/javascript">
  $(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"' class='table-striped'>";
  html_code += "<td>"+count+"</td>";
   html_code += "<td><input type='text' class='form-control required course' id='course_"+count+"' ></td>";
   html_code += "<td><input type='text' class='form-control required duration' id='duration_"+count+"' ></td>";
    html_code += "<td><select class='form-control  semester' id='semester_"+count+"' ><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option></select></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    
    $('#save').on('click',function(e){
    e.preventDefault(e);
  token = $('input[name="_token"]').val();
  
    var course=[];
    var duration=[];
    var academic_year=[];
    var semester=[];

    $('.course').each(function(){
   course.push($(this).val());
  });
  $('.duration').each(function(){
   duration.push($(this).val());
  });
  $('.academic_year').each(function(){
   academic_year.push($(this).val());
  });
  $('.semester').each(function(){
   semester.push($(this).val());
  });
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    // alert(course)
  $.ajax({
    type: "POST",
    url: '/courses',
    data: { course:course, duration:duration ,academic_year:academic_year,semester:semester},
    success: function (data) {
       $("#result").html(data);
       alert("THANK U FOR REGISTERED COURSE !!!");
    },
    error: function (data) {
        console.log(data);

    },
});

    });
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$(".edit-course").click(function(){
$("#course_id").val($(this).data("course_id"));
$("#course_name").val($(this).data("course_name"));
$("#course_duration").val($(this).data("course_duration"));

$("#semester").val($(this).data("semester"));
  
$('#update').on('click',function(e){
    // alert('asds');
    var name=$("#course_name").val();
    var duration=$("#course_duration").val();

    var semester=$("#semester").val();

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    e.preventDefault(e);
        $.ajax({
        type:"PATCH",
        url:' courses/'+$("#course_id").val(),
        data: {name,duration,semester},
        dataType: 'json',
        success: function(data){
             alert(data);
            console.log(data);

        },
        error: function(data){
            console.log(data);
        
        }
    })
    });
 
});
  // delete button 
  $(".btn-delete").on('click',function(){
  
    var con = confirm("Do You Want To delete ?");
    if(con == false){
      return;
    }   
    $.ajax({
      url:'/courses/'+$(this).data('id'),
      type:'DELETE',
      success: function(data){
             alert(data);
            console.log(data);

        },
       error: function(data){
            console.log(data);
        
        }
    });
  })

  //.delete button
 </script>

@endsection
  


