@extends('layouts.header')
@section('body')

  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Admission List</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="icon_document_alt"></i>Admission</li>
              <li><i class="fa fa-files-o"></i>Details</li>
            </ol>
          </div>
        </div>  
          
        <section class="panel">
                <header class="panel-heading">
                  Student List
                </header>
                <div class="panel-body">
            <div class="col-md-3">
              <form class="form-validate form-horizontal" id="search-form" >
                   {{csrf_field()}}
              <label>Enrollment No</label>
  <input type="text" class="form-control" placeholder="Search" name="id">
  <br>
</div>
<div class="col-md-3">
  <label>Academic Year</label>
 <select class="form-control" name="year">
   <option selected disabled hidden value="">Select Year</option>
   @foreach($year as $y)
    <option value="{{$y->year}}">{{$y->year}}</option>
    @endforeach
  </select>

  <br>
</div>
<div class="col-md-3">
  <label>Courses</label>
  <select class="form-control" id="courses" name="course">

   <option selected disabled hidden value="">Select Course</option>
     @foreach($course as $c)
    <option value="{{$c->id}}">{{ $c->name }}</option>
    @endforeach
  </select>
  <br>
</div>
<div class="col-md-2">
  <label>Semester</label>
  <select class="form-control" id="semester" name="semester">
  </select>
  <br>
</div>
<div class="col-md-1">
    <br>
<button type="button"  class="btn btn-primary" id="search-btn">search</button>
  
</div>
</form>
<div class="col-md-8">
  
</div>
<br>
 <div id="result">
 </div>
</div> 
 </section>      
 
</body>
<script type="text/javascript">
 $("#courses").on('change',function(){
    alert();
   $.ajax({
    url:'/getsemesterlist?id='+$(this).val(),
    type:'get',
    success:function(data){
      alert(data);
      $("#semester").html(data);
      console.log(data);
    },
    error:function(data){
      alert(data);
      console.log(data);
    }
   });
  });
 $("#search-btn").click(function(){
  // alert();
  $.ajax({
    url:'/searchstudent',
    type:'POST',
    data:$("#search-form").serialize(),
    success:function(data){
      $("#result").html(data);
      console.log(data)
      // alert("success")
    },
    error:function(data){
      alert("error")
      console.log(data);
    }
  });
 });
</script>
@endsection

