  @extends('layouts.header')

  @section('body')

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-files-o"></i> Update Admission</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="icon_document_alt"></i>Update</li>
                <li><i class="fa fa-files-o"></i>Admission</li>
              </ol>
            </div>
          </div>
          <!-- Form validations -->
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Admission Form
                </header>
                <div class="panel-body">
                  <div class="form">
                    <form class="form-validate form-horizontal" id="admission_form" method="post" enctype="multipart/form-data" novalidate >
                      {{csrf_field()}}
                      <div class="col-md-12">
                        <div class="alert alert-info well-sm text-center"><h4>Student Details</h4></div>
                        <div class="col-md-4">
                        <label class="control-label" for="courses1">Courses <span class="required">*</span></label>
                        <select   class="form-control round-input" name="course_id"  required>
                          <option hidden selected disabled > courses</option>
                          
                                                <option value="{{$student->course->id}}">{{$student->course->name}}</option>
                                               
                                            </select>
                                          
                                        </div>
                      <div class="col-md-4 ">
                      
                          <label for="fullname" class="control-label">Student Full Name <span class="required">*</span></label>
                          <input class="form-control round-input"  name="fullname" minlength="5" type="text" required  value="{{$student->student_name}}" />
                        </div>

                        <div class="col-md-4 ">
                      
                          <label for="inputError" class="control-label">Email Address<span class="required">-</span></label>
                          <input class="form-control round-input"  name="email"  type="email" value="{{$student->email}}" required />
                        </div>
                        <div class="col-md-4  ">
                      
                          <label for="inputError" class="control-label">Student Mobile No.<span class="required">*</span></label>
                          <input class="form-control round-input"  name="student_contact"  type="text" minlength="10" maxlength="10" value="{{$student->student_contact}}" required />
                        </div>
                       <div class="col-md-4">
                        <label class="control-label" for="gender">Select Gender <span class="required">*</span></label>
                        <select class="form-control round-input" name="gender"   required>
                          <option value="{{$student->gender}}"  hidden selected disabled >{{$student->gender}}</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Others</option>
                                               
                                            </select>
                                          
                                        </div>

                        <div class=" col-md-4 ">
                      
                          <label for="gdname" class="control-label">Father's/Guardian's Name <span class="required">*</span></label>
                          <input class="form-control round-input" id="father_name" name="gdname" minlength="5" type="text" value="{{$student->father_name}}" required />
                        </div>
                        <div class="col-md-4  ">
                      
                          <label for="gdcontact" class="control-label">Father's Mobile No.<span class="required">*</span></label>
                          <input class="form-control round-input"  name="father_mobile"  type="text" minlength="10" maxlength="10" value="{{$student->father_mobile}}" required />
                        </div>
                        <div class=" col-md-4 ">
                      
                          <label for="mname" class="control-label">Mother's Name <span class="required">*</span></label>
                          <input class="form-control round-input"  name="mother_name" minlength="5" type="text" value="{{$student->mother_name}}" required />
                        </div>
                         
                        <div class=" col-md-4 ">
                      
                          <label for="dob" class="control-label">Date Of Birth <span class="required">*</span></label>
                          <input class="form-control round-input"  name="dob"  type="date" value="{{$student->dob}}" required />

                        </div>
                        <div class=" col-md-4 ">
                      
                          <label for="year" class="control-label">Admission Year <span class="required">*</span></label>
                          <input class="form-control round-input"  name="admission_year"  type="text" value="{{$student->admission_year}}" required />

                        </div>
                    

                      <div class="col-md-6 ">
                        
                      
                          <label for="ccomment" class="control-label">Permanent Address <span class="required">*</span></label>
                          <input type="text"  class="form-control round-input " id="ccomment" name="permanent_add" value="{{$student->permanent_add}}" required>
                      </div>
  					 <div class="col-md-6 ">
                        
                      
                          <label for="ccomment" class="control-label">Current Address <span class="required">-</span></label>
                          <input type="text"  class="form-control round-input " id="ccomment" name="current_add" value="{{$student->current_add}}" required>
                      </div>


                      <div class="col-md-4">
                      
                    
                        <label class="control-label" for="category">Category <span class="required">*</span></label>
                        <select class="form-control round-input"  name="category" required>
                          <option value="{{$student->category}}"  hidden selected disabled>{{$student->category}}</option>
                                                <option value="gen">Gen</option>
                                                <option value="sc/st">SC/ST</option>
                                                <option value="obc">OBC</option>
                                              
                                            </select>
                                          
                                        </div>
                                        <div class="col-md-4">
                      
                    
                        <label class="control-label" for="caste">Caste <span class="required">*</span></label>
                        <select class="form-control round-input" name="cast" required>
                          <option value="{{$student->cast}}" hidden selected disabled  >{{$student->cast}}<option>
                                                <option>Hindu</option>
                                                <option>Muslim</option>
                                                <option>Sikh</option>
	                                              <option>Christian</option>
	                                              <option>Buddhist</option>
	                                              <option>Jain</option>
	                                              <option>Others</option>
                                            </select>
                                          
                                        </div>
                      
                      <div class="col-md-4">
                      
                    
                        <label class="control-label" for="medium">Medium <span class="required">*</span></label>
                        <select class="form-control round-input" name="medium" required>
                          <option value="{{$student->medium}}"  hidden selected disabled>{{$student->medium}}</option>
                                                <option>Hindi</option>
                                                <option>English</option>
                                              
                                            </select>
                                          
                                        </div>
                                         <div class=" col-md-4 ">
                      
                          <label for="aadhar" class="control-label">Aadhar No. <span class="required">*</span></label>
                          <input class="form-control round-input"  name="adhar_no" minlength="12" maxlength="12" type="text" value="{{$student->adhar_no}}" required />
                        </div>
       
  </div>                                 
    <div class="col-md-12">
    <div class="col-md-offset-1 col-md-10">
      <br>
      
      <div class=" alert alert-success well-sm text-center">Previous Education Details</div>
    </div>
      <div class="col-md-2">
        <label for="exams" class="control-label">Exam <span class="required">*</span></label>
                          <input class="form-control round-input"  name="exam"  type="text" value="{{$student->exam}}" required />
      </div>
      <div class="col-md-2">
        <label for="subject" class="control-label">Subject <span class="required">*</span></label>
                          <input class="form-control round-input"  name="subject" minlength="5" type="text" value="{{$student->subject}}" required />
      </div>
      <div class="col-md-4">
       <label for="board" class="control-label">Board/University <span class="required">*</span></label>
                          <input class="form-control round-input"  name="board" minlength="5" type="text" value="{{$student->board}}" required /> 
      </div>
      <div class="col-md-2">
        <label for="year" class="control-label">Year <span class="required">*</span></label>
                          <input class="form-control round-input"  name="year" minlength="5" type="text" value="{{$student->year}}" required />
      </div>
      <div class="col-md-2">
        <label for="marks" class="control-label">Obtain Marks <span class="required">*</span></label>
                          <input class="form-control round-input"  name="obtain_mark"  type="text" id="marks" value="{{$student->obtain_mark}}" required />
      </div>
      <div class="col-md-2">
        <label for="totalmarks" class="control-label">Total Marks <span class="required">*</span></label>
                          <input class="form-control round-input"  name="total_mark" id="totalmarks"  type="text" value="{{$student->total_mark}}" required />
      </div>
      <div class="col-md-2">
        <label for="percent" class="control-label">Permanentcent % <span class="required">*</span></label>
                          <input class="form-control round-input"  name="percentage" id="percent"  type="text" value="{{$student->percentage}}" readonly/>
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-offset-1 col-md-10">
      <br>
      
      <div class=" col-md-12 alert alert-success well-sm text-center">Upload Photo/Marksheet/Aadhar Card</div>
    </div>
                       <div class="col-md-2 col-md-offset-2" id="image-preview">
    <label for="image-upload" id="image-label" >Upload Image</label>
    <input type="file" name="image" id="image-upload" />
  </div> 
  <div  class="col-md-2 col-md-offset-1" id="image-preview1">
    <label for="image-upload1" id="image-label1">Marksheet</label>
    <input type="file" name="image_marksheet" id="image-upload1" />
  </div> 
  <div  class="col-md-2 col-md-offset-1" id="image-preview2">
    <label for="image-upload2" id="image-label2">Aadhar Card</label>
    <input type="file" name="image_adhar" id="image-upload2" />
  </div> 
  </div>
  </div>
                      <div class="form-group">
                        <div class="col-lg-offset-5 col-md-6">
                          <br>
                          <br>
                          <button class="btn btn-primary" id="submit" type="button">update</button>
                          <button class="btn btn-default" type="button">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
              </section>
            </div>
          </div>
         
          <!-- page end-->
        </section>
      </section>
    
     
  </body>
  <script type="text/javascript">
  $(document).ready(function() {
    $.uploadPreview({
      input_field: "#image-upload",   // Default: .image-upload
      preview_box: "#image-preview",  // Default: .image-preview
      label_field: "#image-label",    // Default: .image-label
      label_default: "Upload Image",   // Default: Choose File
      label_selected: "Change Image",  // Default: Change File
      no_label: false                 // Default: false
    });
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $.uploadPreview({
      input_field: "#image-upload1",   // Default: .image-upload
      preview_box: "#image-preview1",  // Default: .image-preview
      label_field: "#image-label1",    // Default: .image-label
      label_default: "Marksheet",   // Default: Choose File
      label_selected: "Change File",  // Default: Change File
      no_label: false                 // Default: false
    });
  });
  $(document).ready(function() {
    $.uploadPreview({
      input_field: "#image-upload2",   // Default: .image-upload
      preview_box: "#image-preview2",  // Default: .image-preview
      label_field: "#image-label2",    // Default: .image-label
      label_default: "Aadhar Card",   // Default: Choose File
      label_selected: "Change File",  // Default: Change File
      no_label: false                 // Default: false
    });
  });

  var uploadField = document.getElementById("image-upload");

  uploadField.onchange = function() {

      if(this.files[0].size < 250000){
         console.log("done");
      }
      else{
        alert("file must be select < 250 kb");
        this.value = "";
      }
  };
  var uploadField1 = document.getElementById("image-upload1");

  uploadField1.onchange = function() {

      if(this.files[0].size < 250000){
         console.log("done");
      }
      else{
        alert("file must be select < 250 kb");
        this.value = "";
      }
  };
  var uploadField2 = document.getElementById("image-upload1");

  uploadField2.onchange = function() {

      if(this.files[0].size < 250000){
         console.log("done");
      }
      else{
        alert("file must be select < 250 kb");
        this.value = "";
      }
  };
  </script>
  <script type="text/javascript">
    $("#totalmarks").ready(function(){
      $('#totalmarks,#marks').on('keyup keypress blur change',function(e) {
    

  var a=$("#marks").val();
  var b=$("#totalmarks").val();
  var c=(a*100)/b;
  $("#percent").val(c);
  });
    });
  </script>
  <script type="text/javascript">
    
  $('#submit').on('click',function(e){
      alert('asds');
       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
      e.preventDefault(e);
          $.ajax({
          type:"PUT",
          url:'/admission/1',
          data: new FormData($("#admission_form")[0]),
          processData: false,
          contentType: false,
          dataType: 'json',
          success: function(data){
              alert('asd');
              console.log(data);

          },
          error: function(data){
              console.log(data);
          
          }
      })
      });


  </script>
  <script src="{{ url('front/js/admission_validate.js') }}"></script>
    <!--custome script for all page-->
    <script type="text/javascript" src="{{ url('front/js/image.min.js') }}"></script>




    @endsection