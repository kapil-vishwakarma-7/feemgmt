
@extends('layouts.header')
@section('body')


<style type="text/css">
	.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 100%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #3377ec;
   
    
}
.wizard li.active span.round-tab i{
    color: #ffffff;
}

span.round-tab:hover {
    color: #333;
   
}

.wizard .nav-tabs > li {
    width: 30%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #3377ec;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add User</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a >Home</a></li>
              <li><i class="icon_document_alt"></i>Add/Update</li>
              <li><i class="fa fa-files-o"></i>User</li>
            </ol>
          </div>
        </div>
        
        	<div class="row">
        		<div class="col-md-12">
        		<button type="button" class="btn btn-info btn-md  pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> Create User</button>

				</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-body">
          <div class="">
			<section class="panel">
                <header class="panel-heading">
                  User creation
                </header>
                <div class="panel-body">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="fa fa-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fa fa-cog"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="fa fa-check"></i>
                            </span>
                        </a>
                    </li>

                   
                </ul>
            </div>

            <form id="form-create-user" accept="{{route('createuser.store')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">

                        <div class="table-responsive">

                        <table class="table table-bordered">
                        	<thead>
                        		<tr>
                        			<th>First Name</th>
                        			<th>Last Name</th>
                        			<th>Designation</th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<tr>
                        			<td><input type="text" class="form-control" name="fname"></td>
                        			<td><input type="text" class="form-control" name="lname"></td>
                        			<td><input type="text" class="form-control" name="designation"></td>
                        		</tr>
                        	</tbody>
                        </table>
                        	<br>
                       <center><button type="button"  class="btn btn-primary next-step">Save and continue</button></center>
                         
                    </div>
                </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        
			                       
			                       <div class="table-responsive">
			                       	
                                   <table class="table table-striped table-bordered">
							    <thead>
							      <tr>
							        <th width="50%" class="text-center">Permission</th>
							        <th width="25%" class="text-center">Read</th>
							        <th width="25%" class="text-center">Write</th>
							      </tr>
							    </thead>
							    <tbody>
							   @foreach($permissions as $e)
							      <tr>
							        <td>{{$e->name}}</td>
							        <td >
                                        <center>
                                            <input type="checkbox" data-id="R{{$e->id}}" class="pcheck" id="R{{$e->id}}" name="R{{$e->id}}" value="1">
                                            <input type="hidden" id="HR{{$e->id}}" name="R{{$e->id}}" value="0">
                                        </center>
                                    </td>
							        <td>
                                        <center>
                                            <input type="checkbox" class="pcheck" id="W{{$e->id}}" data-id="W{{$e->id}}"  name="W{{$e->id}}" value="1">
                                            <input type="hidden" id="HW{{$e->id}}" name="W{{$e->id}}" value="0">
                                        </center>
                                    </td>
							      </tr>
							   @endforeach
							    </tbody>
							  </table>

			                       </div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="table-responsive">
                        <table class="table table-bordered">
                        	<thead>
                        		<tr>
                        			<th>Password</th>
                        			<th>Re-Enter password</th>
                        			<th>Email</th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<tr>
                        			<td><input type="password" class="form-control" name="password"></td>
                        			<td><input type="password" class="form-control" name="re-password"></td>
                        			<td><input type="email" class="form-control" name="email"></td>
                        		</tr>
                        	</tbody>
                        </table>
                        	<br>
                       <center><button type="button" id="btn-create-user" class="btn btn-primary next-step">Save and continue</button></center>
                         
                    </div> 
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
   </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

	</div class="row">
	<div class="">
		<br>
		<div class="table-responsive">
			<table class=" table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Designation</th>
						
						<th>Action</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach($users as $u)
                        <tr>
    						<td>{{$u->id }}</td>
    						<td>{{$u->name}}</td>
    						<td>{{$u->mobile}}</td>
    						<td>{{$u->email}}</td>
    						<td>{{$u->designation}}</td>

    						<td class="text-center">
                            <button type="button" class="user-edit-btn" data-user-id="{{$u->id}}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal1"><i class="fa fa-edit "></i></button> &nbsp; 

                            <button type="button" class="btn-delete-user" data-id="{{$u->id}}" class="btn btn-default btn-xs" > <i class="fa fa-times-circle text-danger" ></i></button></td>
    					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div>

	 
					 <!-- update user and permission -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">        
        <div class="modal-body">
          <div class="">
			<section class="panel">
                <header class="panel-heading">
                  Update User & Permission
                </header>
                <div class="panel-body">
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step-1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="fa fa-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step-2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fa fa-cog"></i>
                            </span>
                        </a>
                    </li>


                   
                </ul>
            </div>
            <div id="updateuserform">

            </div>
        </div>
    </div>
   </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
					 <!-- end -->
	</div>	
     </section>
   
    </section>
</section>
	<script type="text/javascript">
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

$(".pcheck").change(function(){
    var val = this.checked ? 1 : 0;
    var tar = $(this).data("id");
    if(val == 1){
        $("#H"+$(this).data("id")).prop( "disabled", true );

    }else{
        $("#"+$(this).data("id")).prop( "disabled", false );
    }
});
//create user ajax
$("#btn-create-user").click(function(){
    form = $("#form-create-user");
    $.ajax({
        type:"POST",
        url:"{{url('createuser')}}",
        data: form.serialize(),
        success: function(data){
             alert(data);          
        },
        error: function(data){
            console.log(data);
              if(data.status == 403){
                showMsg(1,"Unauthorised User",1500);
                return;
              }
                showMsg(1,"Cannot Create User",1500);
     }
    })
});

function getUserDetails(user_id){
    $.ajax({
      type:"GET",
        url:"{{url('getuserdetails')}}",
        data: {id:user_id},
        success: function(data){
            $("#updateuserform").html(data)
        },
        error: function(data){
            console.log(data);
              if(data.status == 403){
                showMsg(1,"Unauthorised User",1500);
                return;
              }
            showMsg(1,"Cannot Create User",1500);
        }  
    })
}
$(".user-edit-btn").on('click',function(){
    var user_id = $(this).data('user-id')
     getUserDetails(user_id)
});

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }); 
$(".btn-delete-user").click(function(){
    var id = $(this).data("id")
    alert(id)
    $.ajax({
      type:"GET",
        url:"{{url('updateuser')}}"+"/"+id,
        success: function(data){
            showMsg(1,"User Deleted",1500);
        },
        error: function(data){
            console.log(data);
              if(data.status == 403){
                showMsg(1,"Unauthorised User",1500);
                return;
              }
            showMsg(1,"Cannot Create User",1500);
        }  
    })
})

</script>
    

@endsection