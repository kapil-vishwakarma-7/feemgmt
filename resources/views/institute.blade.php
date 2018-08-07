@extends('layouts.header')
@section('body')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Institute Detail</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Add/Update</li>
              <li><i class="fa fa-files-o"></i>Institute</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              Institute Detail
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="add_institute" method="post"   enctype="multipart/form-data" novalidate>
                        {{csrf_field()}}
                    <div class="col-md-10 form-group">

                    <div class="col-md-6 ">
                    
                        <label for="cname" class="control-label">Institute Name <span class="required">*</span></label>
                        <input class="form-control round-input" id="name" value="{{$institute->name}}" name="name" minlength="5" type="text" required />
                      </div>
                    <div class="col-md-6 ">
                    
                       <div class="form-group ">
                     
                      <div class="col-lg-12">
                         <label for="cname" class="control-label">Contact <span class="required">*</span></label>
                        <input class="form-control round-input" id="contact" name="contact" minlength="10" maxlength="10" type="text" value="{{$institute->contact }}" required />
                      </div>
                    </div>
                      </div>
                      
                      <div class="col-md-6 ">
                    
                        <label for="email" class="control-label">Email Address</label>
                        <input class="form-control round-input" id="email" name="email"  type="email" value="{{$institute->email}}" required />
                      </div>
                     <div class="col-md-6 ">
                    
                        <label for="email" class="control-label">Registration No</label>
                        <input class="form-control round-input" id="registration_no" name="registration_no" value="{{$institute->registration_no}}" type="text" required />
                      </div>
                       <div class="col-md-10 ">
                        <label for="ccomment" class="control-label">Permanent Address <span class="required">*</span></label>
                        <textarea class="form-control round-input " id="address" name="address"  required>{{$institute->address}}</textarea>
                    </div>
                      </div>
                    <div class="col-md-2">
                     <div id="image-preview" style="height: 200px;" >
                     <img src="{{ url('uploads/'.$institute->image) }}" class="img-responsive thumbnail">
  <label for="image-upload" id="image-label" >Upload Image</label>
  <input type="file" name="image"  id="image-upload"  />
</div> 
  
<br>

                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" id="save" type="button">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
{{-- @extends('layouts.footer') --}}
 
  <!-- custom form validation script for this page-->
 

</body>
<script type="text/javascript">
// $(document).ready(function() {
//   $.uploadPreview({
//     input_field: "#image-upload",   // Default: .image-upload
//     preview_box: "#image-preview",  // Default: .image-preview
//     label_field: "#image-label",    // Default: .image-label
//     label_default: "Upload Image",   // Default: Choose File
//     label_selected: "Change Image",  // Default: Change File
//     no_label: false                 // Default: false
//   });
// });

// $(document).ready(function() {
//   $.uploadPreview({
//     input_field: "#image-upload1",   // Default: .image-upload
//     preview_box: "#image-preview1",  // Default: .image-preview
//     label_field: "#image-label1",    // Default: .image-label
//     label_default: "Marksheet",   // Default: Choose File
//     label_selected: "Change File",  // Default: Change File
//     no_label: false                 // Default: false
//   });
// });

var uploadField = document.getElementById("image-upload");

uploadField.onchange = function() {

    if(this.files[0].size < 250000){
       console.log("done");
    }
    else{
      alert("file must be select < 250 kb");
      this.value = "";
    }
};

$("#save").on('click',function(e){
  //alert("dasd");
    e.preventDefault(e);
        $.ajax({
        type:"POST",
        url:"{{url('/institute')}}",
        // data:$("#add_institute").serialize(),
        data: new FormData($("#add_institute")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,

        success: function(data){
            console.log(data);
            showMsg(1,"Profile Updated",1500);
            // alert("THANK U FOR REGISTERED !!");
        },
        error: function(data){
            showMsg(1,"Cannot Updated Profile",1500);
          console.log(data)
        }
    })
    });
</script>
</html>
@endsection

