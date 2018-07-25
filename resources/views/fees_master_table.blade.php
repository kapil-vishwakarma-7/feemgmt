<div class="table-responsive" id="tab-fee_masters">
@if(!is_null($masters))

								 <table class="table table-hover table-striped" >
    <thead>
      <tr>
        {{-- <th width="5%">#</th> --}}
        <th width="10%">Semester</th>
        <th width="25%">Fees Type</th>
        <th width="10%">Year</th>
        <th width="20%">Amount</th>

        <th width="30%">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0; ?>
      @foreach($masters as $e)
        
        <tr>
{{--           <td>{{ ++$i }}</td> --}}

          <td > {{ $e->semester->name }}</td>
          <td>{{ $e->fees_type }}</td>

          <td>{{ $e->ac_year }}</td>
          <td>{{ $e->amount }}</td>
          <td><button id="btnnn" class="btn-delete btn btn-info btn-sm" data-id={{$e->id}} >Delete</button>

                <button data-fee_id="{{ $e->id }}" data-fee_type="{{$e->fees_type}}" data-fee_amount="{{$e->amount}}" data-semester="{{$e->semester_id}}" class="edit-fees-data btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Edit</button>
          </td>
          <td>
          </td>
        </tr>

      @endforeach
        <tr>
          <td></td>

          <td><b>Total Amount</b></td>

          <td></td>
          <td><b>{{$masters->sum('amount')}}</b></td>
          <td></td>
          
        </tr>
    </tbody>
  </table>	
  <script type="text/javascript">
    $('.edit-fees-data').on('click', function (e) {
        $("#fee_id").val($(this).data("fee_id"));
        $("#fee_typed").val($(this).data("fee_type"));
        $("#fee_amount").val($(this).data("fee_amount"));
        $("#semestered").val($(this).data("semester"));
  
  });


  // delete button 
  $(".btn-delete").on('click',function(){
    alert();
    var con = confirm("Do You Want To delete ?");
    if(con == false){
      return;
    }   

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url:'/feesmaster/'+$(this).data('id'),
      type:'DELETE',
      success: function(data){
             alert("THANK U FOR DELETE !!!");
            console.log(data);

        },
       error: function(data){
            console.log(data);
        
        }
    });
  })

  </script>		
@endif

</div>
