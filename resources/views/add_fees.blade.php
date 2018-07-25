
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
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									View Fees Detail
								</header>
								<div class="panel-body">
							
										
											<div class="col-md-5 col-md-offset-2">
									
													<select class="form-control" id="sel-course_id" onchange="getFeeMasters();">
														<option disabled hidden selected>Select Course</option>
														@foreach($course as $e)
															<option value="{{ $e->id }}">{{ $e->name }}</option>
														@endforeach
													</select>

											
											</div>
											<div class="col-md-2 ">
									
													<select class="form-control" id="sel-course_year" onchange="getFeeMasters();">
														@foreach($years as $e)
															<option value="{{ $e->year }}">{{ $e->year }}</option>
														@endforeach
													</select>

											
											</div>
</div>
								
@include('fees_master_table')

											

								
							</section>
							<section class="panel">
								<header class="panel-heading">
									Add Fees
								</header>
								<div class="panel-body">
						
								<div class="table-responsive">

								 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th width="5%">#</th>
        <th width="20%">Course</th>
        <th width="15%">Semester</th>
        <th width="20%">Fee Type</th>
        <th width="20%">Amount</th>
        <th width="20%">Year</th>
        
        
        
      </tr>
    </thead>
    <tbody>
    	<form id="add-course" >

    		{{ csrf_field() }}
      <tr>
        <td>1</td>
	        <td>
	        	<select name="course_id" class="form-control" id="add-course_id">
	        			<option disabled selected hidden>Select Course</option>
	        			@foreach($course as $e)
							<option value="{{ $e->id }}" >{{ $e->name }}</option>
						@endforeach
    	    	</select>
    		</td>
         <td><select class="form-control" name="semester" id="semester"></select></td>
        <td><input type="text" class="form-control" name="fees_type" id="fee_type">
            </td>
        <td><input type="text" class="form-control" name="amount"></td>
        
       <td>
         <select class="form-control" name="ac_year" id="ac_year" readonly>
           	@foreach($years as $e)
				<option value="{{ $e->year }}" >{{ $e->year }}</option>			
			@endforeach
           </select>
       </td>
      </tr>
      </form>
    	
    </tbody>

  </table>	
  <center><button type="button" id="btn-add_course" class="btn btn-info">Save</button></center>		

</div>

											

								
							</section>

						</div>

					</div>
				 

				 @include('master_fees_table')
					<!-- page end-->
				</section>
			</section>
		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Fees</h4>
        </div>
        <div class="modal-body">
         <form id="course_update">
          <input class="form-control" type="hidden" id="fee_id" name="id" >
          {{csrf_field()}}
           <label>Fee Type :</label>
           <input class="form-control" type="text" id="fee_typed" name="fee_type" >
            <label>Amount :</label>
           <input class="form-control" type="text" id="fee_amount" name="fee_amount" >
           {{-- <label>Semester :</label> --}}
           <input class="form-control" type="hidden" id="semestered" name="semester" >
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


	$("#btn-add_course").on('click',function(){
		alert();		
		$.ajax({
			type:"POST",
			url:'/feesmaster',
			data:$("#add-course").serialize(),

			success: function(data){
				alert("Fee Master Created");
			},
			error:function(data){
				alert("Cannot Add master");
				console.log(data);
			}
		})
	});
	function getFeeMasters(){
		var id = $("#sel-course_id").val();
		var year = $('#sel-course_year').val();
		$("#add-course_id").val(id);
		// alert(year);
		$.ajax({
			type:'GET',
			url : '/getfeemaster?id='+id+'&year='+year,
			success:function(data){
				// alert('ScrollView');
				console.log(data);
				$("#tab-fee_masters").html(data);

   	

			},
			error:function(data){
				alert(data);
				console.log(data);
			}
		})
	}
	</script>
	
	
<script type="text/javascript">
 


$(document).ready(function(){
 
$('#update').on('click',function(e){
    alert('asds');
    var fee_type=$("#fee_typed").val();
    var fee_amount=$("#fee_amount").val();
    var semester=$("#semestered").val();
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    e.preventDefault(e);
        $.ajax({
        type:"PUT",
        url:' feesmaster/'+$("#fee_id").val(),
        data: {'fees_type':fee_type,'fee_amount':fee_amount,'semester':semester },
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
  //.delete button

   

 </script>	
<script type="text/javascript">
	$("#add-course_id").on('change',function(){
     var course=$(this).val();
		// alert(course);
		   $.ajax({
        type:"get",
        url:'getsemester?id='+$(this).val(),
        success: function(data){
             // alert(data);
             $('#semester').html(data);
             // alert('success');
            console.log(data);
        },
        error: function(data){
            alert("error")
            console.log(data);

        
        }
    })

	})
$("#sel-course_year").on("change",function(){
    // alert()
   	$("#ac_year").val($(this).val());
})

</script>


@endsection