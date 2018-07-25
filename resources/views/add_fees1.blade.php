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
							
										
											<div class="col-md-8 col-md-offset-2">
									
													<select class="form-control">
														<option>Select Course</option>
														<option>
															dafdsfdsfdf
														</option>
													</select>
											
									
	<br>										</div>
</div>
								<div class="table-responsive">

								 <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th width="5%">#</th>
        <th width="15%">Semester</th>
        <th width="20%">Amount</th>
        <th width="40%">Description</th>
        <th width="20%">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>			

									</div>

											

								
							</section>
							<section class="panel">
								<header class="panel-heading">
									Add Fees
								</header>
								<div class="panel-body">
						
								<div class="table-responsive">

								 <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th width="5%">#</th>
        <th width="20%">Course</th>
        <th width="15%">Semester</th>
        <th width="20%">Amount</th>
        <th width="40%">Description</th>
        
        
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><select class="form-control">
        	<option>fdf</option>
        	<option>fdf</option>
        	<option>fdf</option>
        </select></td>
        <td><select class="form-control">
        	<option>fdf</option>
        	<option>fdf</option>
        	<option>fdf</option>
        </select></td>
        <td><input type="text" class="form-control" name=""></td>
         <td><input type="text" class="form-control" name=""></td>
      </tr>
      
    
    </tbody>

  </table>	
  <center><button type="button" class="btn btn-info">Save</button></center>		

									</div>

											

								
							</section>

						</div>

					</div>
				 

				 @include('master_fees_table')
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
	</script>
	
		@endsection