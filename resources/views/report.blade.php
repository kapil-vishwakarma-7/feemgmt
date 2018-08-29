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
                                    <select class="form-control">
                                      <option>BCA</option>
                                      <option>BCA</option>
                                      <option>BCA</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Courses</label>
                                    <select class="form-control">
                                      <option>BCA</option>
                                      <option>BCA</option>
                                      <option>BCA</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Semester</label>
                                    <select class="form-control">
                                      <option>BCA</option>
                                      <option>BCA</option>
                                      <option>BCA</option>
                                    </select>
                                  </div>
                                 
                                </div>
                                  <!-- fees due -->
                                <div id="feesdue" class="paymhide" style="display: none;">
                                  <div class="col-md-4">
                                    <label>Select Year</label>
                                    <select class="form-control">
                                      <option>BCA</option>
                                      <option>BCA</option>
                                      <option>BCA</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Courses</label>
                                    <select class="form-control">
                                      <option>BCA</option>
                                      <option>BCA</option>
                                      <option>BCA</option>
                                    </select>
                                  </div>
                                  <div class="col-md-4">
                                    <label>Semester</label>
                                    <select class="form-control">
                                      <option>BCA</option>
                                      <option>BCA</option>
                                      <option>BCA</option>
                                    </select>
                                  </div>

                                  
                                  <div class="col-md-6 col-md-offset-3">
                                    <br>
                                  <button type="button" class="btn btn-success">Search</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-download"></i>In Excel</button>
                                </div>
                                </div>
                                <!-- payment received -->
                                <div id="pmtreceived" class="paymhide" style="display: none;">
                                  <div class="row">
                               <div class="col-md-4">
                                <label>From*</label>
                                 <input type="date" class="form-control" name="">
                               </div>
                               <div class="col-md-4">
                                 <label>To*</label>
                                 <input type="date" class="form-control" name="">
                               </div><br>
                                <div class="col-md-4">
                                
                                    <button type="button" class="btn btn-success"  onclick="window.print();"> <i class="fa fa-print"></i> Print</button>
                                  <button type="button" class="btn btn-success"> <i class="fa fa-download"></i> Download In Excel</button>
                                </div>
                                  <br>
                                </div>

                                  </div>
                              <br>
                             
                                </div>
                                                                <br><div class="table-responsive" id="pay" style="display: none;">
       
          <table class="table table-bordered" >
            <thead>
              <tr>
                 <th style="background: #3377ec !important;">Receipt No</th>
              <th style="background: #3377ec !important;">Name</th>
              <th style="background: #3377ec !important;">Course</th>
              <th style="background: #3377ec !important;">Amount</th>
              <th style="background: #3377ec !important;">Payment Mode</th>
              <th style="background: #3377ec !important;">Date</th>
              </tr>
             <tr>
                <td style="background: white !important;"><input type="text" class="form-control myInput hidden-print" placeholder="Search" name=""></td>
                <td  style="background: white !important; "><input type="text" class="form-control myInput hidden-print" placeholder="Search"   name=""></td>
                <td style="background: white !important;">
                  <select class="form-control myInput">
                    <option value="BCA">BCA</option>
                    <option>MBA</option>
                  </select>
                </td>
                <td style="background: white !important;"><input type="text" class="form-control myInput hidden-print " name="" placeholder="Search" ></td>
                <td style="background: white !important;"><select class="form-control myInput">
                    <option value="BCA">BCA</option>
                    <option>MBA</option>
                  </select></td>
                <td style="background: white !important;"><input type="text" class="form-control myInput hidden-print" name="" placeholder="Search" ></td>
              </tr>
            </thead>
            <tbody id='myTable'>
              
        @foreach($rep as $e)
              <tr >
                <td>{{'US'.$e->recipt_no }}</td>
                <td>{{ 'KAPIL VISHWAKARMA' }} </td>
                <td>{{ 'BCA' }}</td>
                <td>{{ $e->amount }}</td>
                <td>{{ $e->payment_mode }}</td>
                <td>{{ $e->fee_date }}</td>
              </tr>
        @endforeach
            </tbody>
          </table>
       
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
                                  <input type="date" class="form-control" placeholder="Select Date" name="">
                                </div>
                                <div class="col-md-4">
                                  <label>To*</label>
                                  <input type="date" placeholder="Select Date" name="" class="form-control">
                                </div>
                                <div class="col-md-4">
                                  <br>
                                  <button type="button" class="btn btn-success">Search</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
                                  <button type="button" class="btn btn-success"><i class="fa fa-download"></i>In Excel</button>

                                </div>

                                </div>
                                <br>
                                <div class="table-responsive">
                                   <br>
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                         <th>#</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Contact</th>
                                         <th>Course</th>
                                         <th>Address</th>
                                      </tr>
                                    </thead>
                                   <tbody>
                                     <tr>
                                       <td></td>
                                     </tr>
                                   </tbody>
                                  </table>
                                </div>
                              </div>
                              
                            
                              </section>
                              </div>
                              <!-- student start -->
                              <div class="col-md-12 report-sub" id="student" style="display: none;">
                                          <section class="panel">
                                <div class="col-md-3">
                                  <label>Select*</label>
                                  <select class="form-control">
                                    <option>---</option>
                                    <option>Accounts </option>
                                    <option>Enquiry </option>
                                    <option>Student Details </option>
                                    
                                  </select>
                                </div>
                                <div class="col-md-3">
                                  <label>Select Fees*</label>
                                  <select class="form-control">
                                    <option>---</option>
                                    <option>Payment Received</option>
                                    <option>Fees Paid </option>
                                    <option>Fees Due </option>
                                    
                                    
                                  </select>
                                </div>
                                <div class="col-md-3">
                                  <label>Select*</label>
                                  <select class="form-control">
                                    <option>---</option>
                                    <option>Fees Pay </option>
                                    <option>Fees Due </option>
                                    
                                    
                                  </select>
                                </div>
                                <div class="col-md-3">
                                  <label>Select*</label>
                                  <select class="form-control">
                                    <option>---</option>
                                    <option>Fees Pay </option>
                                    <option>Fees Due </option>
                                    
                                    
                                  </select>
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
});
</script>
@stop    
