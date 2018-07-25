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
									Fees Form
								</header>
								<div class="panel-body">
									<div class="form">
										<form class="form-validate form-horizontal" id="fees-form" method="post"  novalidate >
											{{csrf_field()}}
											<div class="col-md-12">
												<div class="alert alert-success well-sm text-center">Student Details</div>
												<div class="col-md-4">
												<label class="control-label" for="courses1">Id <span class="required">*</span></label>
																			 <input class="form-control round-input"  name="id"  type="text" required />   
																				</div>
											<div class="col-md-4 ">
											
													<label for="fullname" class="control-label">Student Full Name <span class="required">*</span></label>
													<input class="form-control round-input"  name="fullname" minlength="5" type="text" required />
												</div>

												<div class="col-md-4 ">
											
													<label for="inputError" class="control-label">Semester<span class="required">*</span></label>
													<input class="form-control round-input"  name="semester"  type="text" required />
												</div>

										 </div>
											 </div>
											<div class="form-group">
												<div class="col-lg-offset-5 col-md-6">
													<br>
													<br>
													<button class="btn btn-primary" id="search-data" type="button">Search</button>
													<button class="btn btn-default" type="button">Cancel</button>
												</div>
											</div>
										</form>
									</div>

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