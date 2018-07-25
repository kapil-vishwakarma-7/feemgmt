@extends('layouts.header')
@section('body')

  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> New Enquiry Form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="icon_document_alt"></i>Enquiry</li>
              <li><i class="fa fa-files-o"></i>Details</li>
            </ol>
          </div>
        </div>       
        <div class="table-responsive"> 
  <table class="table table-bordered table-hover content">
    <thead>
      <tr>
        <th class="bg-info">S.no</th>
        <th class="info">Name</th>
        <th class="info">Email</th>
        <th class="info">Course</th>
        <th class="info">Contact</th>
        <th class="info">Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach($enquiries as $enquiry)

      <tr>
        <td>{{$enquiry->id}} </td>
        <td>{{$enquiry->name}} </td>
        <td>{{$enquiry->email}} </td>
        <td>{{$enquiry->course->name}} </td>
        <td>{{$enquiry->contact}} </td>
        <td>{{$enquiry->address}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  {{ $enquiries->links() }}
<script type="text/javascript">
  $(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];
    // console.log($(this).attr('href').split('page='));
    getEnquiry(page);
  });
  function getEnquiry(page){
    $.ajax({
    url:"{{url('/enquairyview')}}",
    data:{'page':page},
    type:'GET',
    }).done(function(data){
      $('.content').html(data);
      location.hash=page;
    });
  }
</script>

@endsection
