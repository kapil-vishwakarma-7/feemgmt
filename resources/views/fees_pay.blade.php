@extends('layouts.header')
@section('body')

			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header"><i class="fa fa-files-o"></i> Add Fees</h3>
							<ol class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="{{ url('/') }}">Home</a></li>
								<li><i class="icon_document_alt"></i>Add</li>
								<li><i class="fa fa-files-o"></i>Fees</li>	
							</ol>
						</div>
					</div>
					<!-- Form validations -->
					<div class="row" id="show_fee_detail">
				      @include('include.show_fee_detail');
					</div>
					</div>
 <div class="row">
    
      <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel" style="max-height: 300px;">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Pay Fees</h1>
                  </div>
                 
                </div>
              </div>
              <div class="table-responsive">
              <form id="add-fee-form">
                  
              <table class="table table-hover">
                <tbody>
                  <tr>
                
                     <th class="info">Semester</th>
                        <th class="info">Total Fees</th>
                        <th class="info" >Fees Due</th>
                        <th class="info" >Discount</th>
                        <th class="info">After Discount</th>
                      </tr>
                     
                  
                 <tr>
                    {{csrf_field()}}
                    <input type="hidden" name="student_id" value="{{$student->id}}" >

                    <input type="hidden" name="course_id" value="{{$student->course->id}}" >

                    <td><select class="form-control" id="add-fee-semester" name="semester" >
                      <option hidden selected disabled>Semester</option>
                      @foreach($student->course->semesters as $sem)
                        <option value="{{$sem->id}}" >{{$sem->name}}</option>
                      @endforeach
                    </select></td>

                    
                    <td>
                      <input type="text" class="form-control" id="add-fee-total-amount" readonly="true">
                    </td>


                    <td>
                     <input type="text"  readonly="true" id="add-fee-due" class="form-control"> 
                    </td>
                    <td>
                        <input type="text" name="discount" value="0" id="add-fee-discount" class="form-control">
                    </td>
                    <td>
                      <input type="text" id="add-fee-after-discount" class="form-control" readonly="true" name="">
                    </td>

                    
                    <td>
                     <input type="date"  id="add-fee-date" name="fee_date" class="form-control"> 
                    </td>

</tr>
 <tr>
                        <th>Pay fees</th>
                        <th>Fees Due</th>
                        <th>Payment Mode</th>
                        <th></th>
                        
                        <th>Remark</th>
                  </tr>
           <tr>

                <td>
                  <input type="text" id="add-fee-pay" class="form-control" name="amount">
                </td>
                <td>
                  <input type="text" id="add-fee-due-amount" class="form-control" name="">
                </td>
                    <td><select id="add-fee-mode" class="form-control" name="payment_mode">
                      <option value="Cash">Cash</option>
                      <option value="Cheque">Cheque</option>
                      <option value="UPI">UPI</option>
                      <option value="Other">Other</option>
                    </select></td>
                    <td>
                      <input id="add-fee-cheque" placeholder="Cheque Number" type="text" class="form-control" name="cheque_no" style="display: none;">
                      <input id="add-fee-upi" placeholder="UPI Number" type="text" class="form-control" name="upi_no" style="display: none;">
                    </td>
                   
                    <td><input type="text" class="form-control" name="description"></td>
                  
                  
                 </form>                  
                </tr>  

                        
                    
                </tbody>

              </table>
<center><button type="button" id="add-fee-paybtn" class="btn btn-primary">  Pay Fee  </button></center>
          </div>

            </section>
            <!--Project Activity end-->
          </div>         
             
</div>    


					<div class="row">
		<div class="col-md-12">
<div class="panel-group">
  <div class="panel" style="background-color: white;">
    <div class="panel-heading" >
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1" style="color: blue;">View Fees Structure</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
      	@foreach($student->course->semesters as $e)
		<div class="col-lg-4">
            <!--Project Activity start-->
            <section class="panel" style=" height: 300px; ">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Semester {{$e->name}}</h1>
                  </div>
                  <div class="col-lg-4">
                    <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        {{$e->name}}
                                </span>
                  </div>
                </div>
              </div>
              <table class="table table-bordered table-hover">
                <tbody>
                	<tr>
                	<th>#</th>
                	<th>Fees Type</th>
                	<th>Amount</th>
                      
                  </tr>
                  <?php $i=1?>
                  @foreach($e->feemasters->where('ac_year',$student->admission_year) as $fm)
	                 <tr>
	                	<td>{{$i++}}</td>
	                	<td>{{$fm->fees_type}}</td>
	                	<td>{{$fm->amount}}</td>
	                </tr>
                  @endforeach

                  <tr>
                    <td></td>
                    <td><b>Total Fees</b></td>
                    <td>{{$e->feemasters->where('ac_year',$student->admission_year)->sum('amount')}}</td>
                  </tr>
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>

@endforeach		

      </div>
    </div>
  </div>
</div>

		</div>
<br>
  <div id="show_fee">
 	   @include('include.show_fee');
   </div>
</div>
			<!-- page end-->
				</section>
			</section>
		
		 
	</body>

	<script type="text/javascript">
		
	$('#search-data').on('click',function(e){
			// alert('asds');
			e.preventDefault(e);
					$.ajax({
					type:"POST",
					url:'/searchstudent',
					data: $("#fees-form").serialize(),
					processData: false,
					dataType: 'json',
					success: function(data){
							alert('success');
							console.log(data);
							$("#result").html(data);
					},
					error: function(data){
							alert("ERROR")
							console.log(data);
							// $("#result").html(data);
							
					}
			})
			});

  $("#add-fee-semester").change(function(){
    var sem_id = $("#add-fee-semester").val();
    var sid = {{$student->id}};
    getFeeAmount();
    getDueFeeAmount(sid,sem_id);
    onDiscount();
  });
  $("#add-fee-discount").on('keyup',function(){
    onDiscount();

  });

  $("#add-fee-mode").change(function (){
      var val = $(this).val();
      if (val == "Cheque"){
        $("#add-fee-cheque").show();
      }else{
        $("#add-fee-cheque").hide();
      }
      if(val == "UPI"){
        $("#add-fee-upi").show();

      }else{
        $("#add-fee-upi").hide();
      }
  });

$("#add-fee-pay").on('keyup',function(){
      $("#add-fee-due-amount").val($("#add-fee-after-discount").val() - ($("#add-fee-pay").val()));
});

$("#add-fee-paybtn").click(function (){
  $.ajax({
    url:'/fees',
    type:'POST',
    data: $("#add-fee-form").serialize(),
    success:function(data){
      alert(data);      
      $("#show_fee_detail").html(data['div1']);
      $("#show_fee").html(data['div2']);  
      console.log(data);
    },
    error:function(data){
      alert(data)
      console.log(data)
    },
  });  
});




  function getFeeAmount(){
    var sem_id = $("#add-fee-semester").val();
    var year  = {{$student->admission_year}};
    $.ajax({
        url:"{{url('/getfeeamount')}}",
        data:{id:sem_id,year:year},
        type:'GET',
        success:function(data){
          $("#add-fee-total-amount").val(data);
          console.log('res'+data);
        },
        error:function(data){
          console.log(data);
          alert(data)
        }
      });

  }

  function onDiscount(){
    $("#add-fee-after-discount").val($("#add-fee-due").val() - ($("#add-fee-discount").val()));
  }

  function getFeeType(){
      var sem_id =  $("#add-fee-semester").val();
      var year = {{$student->admission_year}} ;
      $.ajax({
        url:"{{url('getfeetype')}}",
        data:{sem_id:sem_id,year:year},
        type:'GET',
        success:function(data){
          $("#add-fee-type").html(data['str']);
          $("#add-fee-total-amount").val(data['amount']);
          console.log(data);
        },
        error:function(data){
          alert(data)
        }
      });  
  }

  function getDueFeeAmount(student,sem){
      alert();
      $.ajax({
        url:"{{url('/getduefeeamount')}}",
        data:{sid:student,sem:sem},
        type:'GET',
        success:function(data){
          $("#add-fee-due").val(($("#add-fee-total-amount").val())- data);
          onDiscount();
          
          console.log(data);

        },
        error:function(data){
          alert("error"+data);
          console.log(data);

        }
      })
  }

	</script>	
@endsection