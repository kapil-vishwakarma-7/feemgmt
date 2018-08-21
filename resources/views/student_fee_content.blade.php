<form id="form-student-fee" >
    <input class="form-control" type="hidden" id="fee_id" name="id" >
     {{csrf_field()}}
           <div class="row"> 
             <div class="col-md-2"> 
                 <label>Semester </label>
             </div>
             <div class="col-md-5"> 
                 <label>Actual Fee </label>
             </div>
             <div class="col-md-5">
                <label>Discussed Fee</label>
             </div>
           </div>
           <?php $i=1;?>

           <input type="hidden" name="admission_id" value="{{$admission_id}}" id="admission-id">
           @foreach($sem as $s)
           <input type="hidden" value="{{$s->semester_id}}" name="semester[]">
           <div class="row"> 
              <div class="col-md-2"> 
                <label> {{$i++}}</label>
              </div>
              <div class="col-md-5">            
                 <input type="year" name="currentYear" class="form-control"  value="{{$s->amount}}" readonly>
              </div>
              <div class="col-md-5">            
                 <input type="year" name="amount[]" class="form-control" value="{{$s->amount}}">
              </div>
           </div>


           @endforeach

           <br><br>
           <center>
           <button type="button" class="btn btn-primary" id="btn-student-fee">Save</button>
           </center>  
</form>
<script type="text/javascript">
  $("#btn-student-fee").click(function(){
    $.ajax({
          type:"POST",
          url:"{{url('/studentfee')}}",
          data: new FormData($("#form-student-fee")[0]),
          processData: false,
          contentType: false,
          success: function(data){
              
            $("#student-fee-modal").modal('hide');
              showMsg(1,"Fee Card Created",1500);             console.log(data);
              $("#admission_form")[0].reset();

              window.location = APP_URL+"/admissionform?id="+$("#admission-id").val();

          },
          error: function(data){
              console.log(data);
              if(data.status == 403){
                showMsg(1,"Unauthorised User",1500);
                    return;
                }
                showMsg(1,"Failed",1500);
          }
  
    });
  });
</script>