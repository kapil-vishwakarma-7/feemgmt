@extends('layouts.header')
@section('body')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> New Enquiry Form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Enquiry</li>
              <li><i class="fa fa-files-o"></i>Form</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
            <section class="panel">
              <header class="panel-heading">
                Enquiry Form
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="enquiry_form" method="post">
                      {{csrf_field()}}
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="name" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-Mail <span class=""></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" type="email" name="email"  />
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-2" for="courses">Courses <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" name="course"  required>
                        <option  hidden selected disabled>Select ...</option>
                        @foreach($courses as $course)
                                              <option value="{{$course->id}}">{{$course->name}} </option>
                                              @endforeach
                                          </select>
                                        </div>
                                      </div>
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contact <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="contact" minlength="10" maxlength="10" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Address</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="address" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" id="submit" type="button">Save</button>
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
<script type="text/javascript">
  $('#submit').on('click',function(e){
    // alert('asds');
    e.preventDefault(e);
        $.ajax({
        type:"POST",
        url:"{{url('/enquiry')}}",
        data: new FormData($("#enquiry_form")[0]),
       processData: false,
        contentType: false,
        dataType: 'json',
        success: function(data){
            alert('Enquiry Successfully.........');

            console.log(data);

        },
        error: function(data){
            console.log(data);
        
        }
    })
    });

</script>
@endsection
