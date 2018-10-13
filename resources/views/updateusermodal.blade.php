
<!-- start -->

                <form id="form-update-user" accept="{{route('createuser.update',['id'=>$user->id])}}" method="POST" role="form">
                    {{csrf_field()}}
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step-1">

                            <div class="table-responsive">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><input type="text" class="form-control" id="uu-fname" name="fname" value="{{$user->name}}"></td>
                                        
                                        <td><input type="text" class="form-control" id="uu-designation" name="designation" value="{{$user->designation}}"></td>
                                    </tr>
                                </tbody>
                            </table>
                                <br>
                           <center><button type="button"  class="btn btn-primary next-step">Save and continue</button></center>
                             
                        </div>
                    </div>
                        <div class="tab-pane" role="tabpanel" id="step-2">
                            
                                       
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

                               @foreach($user->permission as $e)
                                  <tr>
                                    <td>{{$e->permission->name}}</td>
                                    <td >
                                        <center>
                                            @if($e->read == 1)
                                            <input type="checkbox" data-id="R{{$e->id}}" class="pcheck" id="R{{$e->id}}" name="R{{$e->id}}" value="1" checked>
                                            @else
                                            <input type="checkbox" data-id="R{{$e->id}}" class="pcheck" id="R{{$e->id}}" name="R{{$e->id}}" value="1">
                                            @endif
                                            <input type="hidden" id="HR{{$e->id}}" name="R{{$e->id}}" value="0">
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            @if($e->write == 1)
                                            <input type="checkbox" class="pcheck" id="W{{$e->id}}" data-id="W{{$e->id}}"  name="W{{$e->id}}" value="1" checked>
                                            @else
                                            <input type="checkbox" class="pcheck" id="W{{$e->id}}" data-id="W{{$e->id}}"  name="W{{$e->id}}" value="1">
                                            @endif
                                                                                        
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
                                <li><button id="btn-update-user" type="button" class="btn btn-primary next-step">Submit</button></li>
                            </ul>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </form>

<!-- end -->






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

$("#btn-update-user").on('click',function(){

    form = $("#form-update-user");
    $.ajax({
        type:"POST",
        url:"{{route('updateuser',['id'=>$user->id])}}",
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








</script>