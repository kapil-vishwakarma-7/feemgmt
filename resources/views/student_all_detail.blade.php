  @extends('layouts.header')

  @section('body')

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-files-o"></i> Student Details</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('/') }}">Home</a></li>
                <li><i class="icon_document_alt"></i>student</li>
                <li><i class="fa fa-files-o"></i>detail</li>
              </ol>
            </div>
          </div>
 <div class="container">

  <div class="panel panel-default">
    <div class="panel-body">Basic Information</div>
         <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{url('/uploads/'.$student->image)}}" class="img-circle img-responsive"> </div>
            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Name:</b></td>
                        <td>{{$student->student_name}}</td>
                      </tr>
                      <tr>
                      <td><b>Email:</b></td>
                        <td>{{$student->email}}</td>
                      </tr>
                      <tr>
                        <td><b>Phone:</b></td>
                        <td>{{$student->student_contact}}</td>
                      </tr>
                    <tr>
                        <td><b>Eadhar No. :</b></td>
                        <td>{{$student->adhar_no}}</td>
                      </tr>
                         <tr>
                             
                        <td><b>Gender:</b></td>
                        <td>{{$student->gender}}</td>
                      </tr>
                        <tr>
                        <td><b>DOB:</b></td>
                        <td>{{$student->dob}}</td>
                      </tr>
                      <tr>
                        <td><b>Address:</b></td>
                        <td>{{$student->current_add}}</td>
                      </tr>
                    
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>


               <div class="panel panel-default">
    <div class="panel-body">Other Information</div>
         <div class="row">
              
            
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Father Name:</b></td>
                        <td>{{$student->father_name}}</td>
                      </tr>
                      <tr>
                      <td><b>Father Contact:</b></td>
                        <td>{{$student->father_mobile}}</td>
                      </tr>
                      <tr>
                        <td><b>Mother name:</b></td>
                        <td>{{$student->mother_name}}</td>
                      </tr>
                    <tr>
                       
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
  </div>

             <div class="panel panel-default">
    <div class="panel-body">Addmission Information</div>
         <div class="row">
              
            
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Addmission Year :</b></td>
                        <td>{{$student->admission_year}}</td>
                      </tr>
                      
                   
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
  </div>
             <div class="panel panel-default">
    <div class="panel-body">Previous Year Information</div>
         <div class="row">
              
            
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Exam:</b></td>
                        <td>{{$student->exam}}</td>
                      </tr>
                      <tr>
                      <td><b>Subject:</b></td>
                        <td>{{$student->subject}}</td>
                      </tr>
                      <tr>
                        <td><b>Board:</b></td>
                        <td>{{$student->board}}</td>
                      </tr>
                          <tr>
                        <td><b>Year:</b></td>
                        <td>{{$student->year}}</td>
                      </tr>
                      <tr>
                      <td><b>Obtain Marks:</b></td>
                        <td>{{$student->obtain_mark}}</td>
                      </tr>
                      <tr>
                        <td><b>Total Marks:</b></td>
                        <td>{{$student->total_mark}}</td>
                      </tr>
                      <tr>
                        <td><b>Percentage:</b></td>
                        <td>{{$student->percentage}}</td>
                      </tr>
                    <tr>
                       
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
  </div>
</div>


    @endsection