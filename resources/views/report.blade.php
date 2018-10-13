@extends('layouts.header')

@section('body')

<style type="text/css">
  .form-control:hover{
transition: border 5s;
border: 1px solid green;
  }
</style>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 hidden-print">
            <h3 class="page-header"><i class="fa fa-files-o"></i> All Reports</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('/')}}">Home</a></li>
              <li><i class="icon_document_alt"></i>Reports</li>
              <li><i class="fa fa-files-o"></i>Download</li>
            </ol>
        

		
        </div>
                      <div class="col-md-12 hidden-print">
                                          <section class="panel">
                                              <header class="panel-heading">
                                                Reports
                                              </header>
                                              <div class="panel-body">
                                                <div class="row">
                                <div class="col-md-3">
                                  <label>Select*</label>
                                  <select class="form-control" id="select_report">
                                    <option selected disabled hidden>Select</option>
                                    <option value="account">Accounts </option>
                                    <option value="enquiry">Enquiry </option>
                                    <option value="student">Student Details </option>
                                    
                                  </select>
                                </div>
                               
                              </div>

                            </div>
                              </section>
                              </div>
                              <!-- Accounts start -->
                              <div class="col-md-12 report-sub hidden-print" id="account" style="display: none;">
                                          <section class="panel">
                                              <header class="panel-heading">
                                                Accounts
                                              </header>
                                              <div class="panel-body">
                                                <div class="row">
                                <div class="col-md-3">
                                  <label>Select*</label>
                                  <select class="form-control" id="account-option">
                                    <option selected hidden disabled>Select</option>
                                    <option value="pmtreceived">Payment Received </option>
                                    <option value="feespaid">Fees Paid </option>
                                    <option value="feesdue">Fees Due </option>
                                    
                                  </select>
                                </div>
                                <!-- fees paid -->
                                <div id="feespaid" class="paymhide" style="display: none;">
                                  <div class="col-md-4">
                                    <label>Select Year</label>
                                    <select class="form-control" id="feespaid-year">
                                        <option selected disabled hidden>Select Year</option>
                                        @foreach($years as $e)
                                          <option>{{$e->year}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Courses</label>
                                    <select class="form-control" class="course" id="feespaid-course">
                                        <option selected disabled hidden>Select Course</option>
                                        @foreach($courses as $e)
                                          <option>{{$e->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Semester</label>
                                    <select class="form-control" id="feespaid-sem">

                                        <option selected disabled hidden>Select Semester</option>
                                        @foreach($years as $e)
                                          <option>{{$e->year}}</option>
                                        @endforeach

                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                          <button type="button" id="btn-feespaid">Search</button>
                                  </div>
                                 
                                </div>
                                  <!-- fees due -->
                                <div id="feesdue" class="paymhide" style="display: none;">
                                  <div class="col-md-4">
                                    <label>Select Year</label>
                                    <select class="form-control" id="feesdue-year">
                                      <option selected disabled hidden>Select Year</option>
                                        @foreach($years as $e)
                                          <option>{{$e->year}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Courses</label>
                                    <select class="form-control" id="feesdue-course">
                                      <option selected disabled hidden>Select Course</option>
                                        @foreach($courses as $e)
                                          <option>{{$e->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Semester</label>
                                    <select class="form-control" id="feesdue-sem">
                                        <option selected disabled hidden>Select Course</option>
                                        @foreach($years as $e)
                                          <option>{{$e->year}}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                  
                                  <div class="col-md-6 col-md-offset-3">
                                    <br>
                                  <button type="button" class="btn btn-success" id="btn-feesdue">Search</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-download"></i>In Excel</button>
                                </div>
                                </div>
                                <!-- payment received -->
                                <div id="pmtreceived" class="paymhide" style="display: none;">
                                  <div class="row">
                                     <div class="col-md-4">
                                      <label>From*</label>
                                       <input id="payment-recive-from" type="date" class="form-control" name="">
                                     </div>
                                     <div class="col-md-4">
                                       <label>To*</label>
                                       <input type="date"  id="payment-recive-to" class="form-control" name="">
                                     </div><br>
                                      <div class="col-md-4">
                                        <button type="button" class="btn btn-success" id="btn-payment-recive" >Search</button>

                                        <button type="button" class="btn btn-success"  onclick="window.print();"> <i class="fa fa-print"></i> Print</button>
                                        <button type="button" class="btn btn-success"> <i class="fa fa-download"></i> Download In Excel</button>
                                      </div>
                                    <br>
                                </div>
                               </div>
                              <br>
                             </div>
                             <br>
      <div class="table-responsive" id="pay">       
        

        </div>
                              </div>
                          
                              </section>
                              </div>
                               <!-- Enquiry start -->
                              <div class="col-md-12 report-sub hidden-print" id="enquiry" style="display: none;">
                                          <section class="panel">
                                              <header class="panel-heading">
                                                Enquiry
                                              </header>
                                              <div class="panel-body">
                                                <div class="row">
                               
                               
                               
                                <div class="col-md-4">
                                  <label>From*</label>
                                  <input type="date" class="form-control" placeholder="Select Date" name="enq_from" id="enq_from">
                                </div>
                                <div class="col-md-4">
                                  <label>To*</label>
                                  <input type="date" placeholder="Select Date" name="" class="form-control" id="enq_to" name="enq_to">
                                </div>
                                <div class="col-md-4">
                                  <br>
                                  <button type="button" class="btn btn-success" id="btn-enq-search">Search</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-download"></i>In Excel</button>
                                </div>
                                </div>
                                <br>
                                <div class="table-responsive" id="enq_content">

                                </div>
                              </div>
                              
                            
                              </section>
                              </div>
                              <!-- student start -->
                              <div class="col-md-12 report-sub" id="student" style="display: none;">
                                         <section class="panel">
                                              <header class="panel-heading">
                                                Student Detail
                                              </header>
                                              <div class="panel-body">
                                              <div class="row">
                                <div class="col-md-3">
                                  <label>Select year</label>
                                  <select class="form-control" id="sd-year">
                                      <option selected disabled hidden>Select Year</option>
                                        @foreach($years as $e)
                                          <option>{{$e->year}}</option>
                                        @endforeach
                                  </select>
                                </div>
                                <div class="col-md-3">
                                  <label>Select course</label>
                                  <select class="form-control" id="sd-course"> 
                                    <option selected disabled hidden>Select Course</option>
                                        @foreach($courses as $e)
                                          <option value="{{$e->id}}">{{$e->name}}</option>
                                        @endforeach
                                  </select>
                                </div>
                                <div class="col-md-3">
                                  <label>Select semester*</label>
                                  <select class="form-control" id="sd-semester">
                                    <option selected disabled hidden>Select Semester</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                  </select>
                                </div>
                                <div class="col-md-3">
                                <br>
                                  <button id="btn-student-details" type="button" class="btn btn-success">Search</button >
                                </div>
                                </div>
                                <br>
                                <div class="row" id="student-details-report">
                                  
                                </div>
                              </div>
                              
                            </div>
                                      
                              </section>
                              </div>
                      
      </section>
    </section>    
<script type="text/javascript">
  $(document).ready(function (){
    $("#select_report").on('change',function(){
     var a=$(this).val();
     $(".report-sub").hide();
     
     
     $('#'+a).slideDown(1000);

    });
    $("#account-option").on('change',function(){
     var b=$(this).val();
    $(".paymhide").hide();
     $('#'+b).slideDown(1000);
     
      });
    $("#select_report").on('change',function(){
     var a=$(this).val();
     $(".report-sub").hide();
     
     
     $('#'+a).slideDown(1000);
     $('.form-control').fadeIn("3000");

    });
    $("#select_report").on('change',function(){
     var a=$(this).val();
     $(".report-sub").hide();
     
     
     $('#'+a).slideDown(1000);
     $('.form-control').fadeIn("3000");

    });
  });
</script>
<script>
$(document).ready(function(){
  $(".myInput").on("keyup change", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

// get enq 
$("#btn-enq-search").click(function(){
  var from  = $("#enq_from").val();  
  var to  = $("#enq_to").val();  
  $.ajax({
    url:"{{url('/getenquiry')}}",
    type:'GET',
    data:{'from':from,'to':to},
    success:function(data){
      $("#enq_content").html(data)
      console.log(data);
    },
    error:function(data){
      console.log(data);
    }
  });

});
//payment report
$("#btn-payment-recive").click(function(){
    var from  = $("#payment-recive-from").val();  
    var to  = $("#payment-recive-to").val();  
    $.ajax({
      url:"{{url('/getpaymentrecived')}}",
      type:'GET',
      data:{'from':from,'to':to},
      success:function(data){
        $("#pay").html(data)
        console.log(data);
      },
      error:function(data){
        console.log(data);
      }
    });    
});

});


function getSemester(course){
    // alert(course);
    $.ajax({
          type:"get",
          url:"{{url('getsemester')}}",
          data:{'id' : course},
          success: function(data){
               // alert(data);
               // $('#semester').html(data);
               $('.semester').html(data);
               // alert('success');
              console.log(data);
          },
          error: function(data){
              alert("error")
              console.log(data); 
          }
      });
  }

$(".course").on('change',function(){
  var course = $(this).val();
  getSemester(course);
});

$("#btn-feespaid").click(function(){
  $.ajax({
          type:"get",
          url:"{{url('/feespaidreport')}}",
          data:{'year':$("#feespaid-year").val(),'course':$("#feespaid-course").val(),'semester':$("#feespaid-sem").val()},
          success: function(data){
            $("#pay").html(data)
              console.log(data);
          },
          error: function(data){
              alert("error")
              console.log(data); 
          }
      });
})
$("#btn-feesdue").click(function(){
  $.ajax({
          type:"get",
          url:"{{url('/feesduereport')}}",
          data:{'year':$("#feesdue-year").val(),'course':$("#feesdue-course").val(),'semester':$("#feesdue-sem").val()},
          success: function(data){
            $("#pay").html(data)

              console.log(data);
          },
          error: function(data){
              alert("error")
              console.log(data); 
          }
      });
})

$("#btn-student-details").click(function(){
    $.ajax({
          type:"get",
          url:"{{url('/studentdetails')}}",
          data:{'year':$("#sd-year").val(),'course':$("#sd-course").val(),'semester':$("#sd-semester").val()},
          success: function(data){
            $("#student-details-report").html(data)
              console.log(data);
          },
          error: function(data){
              alert("error")
              console.log(data); 
          }
      });
})
</script>

@stop    
