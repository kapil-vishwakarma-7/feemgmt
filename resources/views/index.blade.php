@extends('layouts.header')
@section('body')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li>
              
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="admission">
            <div class="info-box menu-box">
              <i class="fa fa-university"></i>
              <div class="count">New</div>
              <div class="title">admission</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="enquiry">
            <div class="info-box menu-box">
              <i class="fa fa-edit"></i>
              <div class="count">New</div>
              <div class="title">Enquiry</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="courses">
            <div class="info-box menu-box">
              <i class="fa fa-book"></i>
              <div class="count">Add</div>
              <div class="title">Courses</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="{{ url('/admission/create') }}">
            <div class="info-box menu-box">
              <i class="fa fa-users"></i>
              <div class="count">our</div>
              <div class="title">Students</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->
       <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="{{ url('feesmaster') }}">
            <div class="info-box menu-box">
              <i class="fa fa-inr"></i>
              <div class="count">Fee</div>
              <div class="title">Master</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="{{ url('admission/create') }}">
            <div class="info-box menu-box">
              <i class="fa fa-edit"></i>
              <div class="count">Pay </div>
              <div class="title">Fee</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
        
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <a href="courses">
            <div class="info-box menu-box">
             <i class="fa fa-book .me"></i>
          
              <div class="count">Our</div>
              <div class="title">Courses</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

    
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <a href="{{route('report.index')}}">
            <div class="info-box menu-box">
             <i class="fa fa-users .me"></i>
          
              <div class="count">Our</div>
              <div class="title">Reports</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
           
           {{--  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="">
            <div class="info-box menu-box">
              <i class="fa fa-users"></i>
              <div class="count">Our</div>
              <div class="title">Student</div>
            </div>
            </a>
            <!--/.info-box-->
          </div> --}}
          <!--/.col-->

        </div>

        <!-- project team & activity start -->
        <div class="row">
         
 <div class="col-lg-6">
            <!--Project Activity start-->
            <section class="panel">
                 <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Statistics</strong></h2>
                
              </div>
              <div class="panel-body">
                
                 
                <table class="table ">
                  <thead>
                    <tr>
                      
                      <th>All Enquiry :</th>
                        <th>{{$data['en']}}</th>
                      
                    </tr>
                    <tr>
                      
                      <th>All Courses :</th>
                     <th>{{$data['cn']}}</th>
                    </tr>
                     <tr>
                      
                      <th>All Students :</th>
                         <th>{{$data['sn']}}</th>
                      
                    </tr>


                  </thead>
                  
                </table>
              </div>
          
            </section>
            <!--Project Activity end-->
          </div>
              <div class="col-md-6 portlets">
            <section class="panel">
                 <div class="panel-heading">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Tags</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                
              </div>
            </div>

          </div>

        </div>

       
        <!-- project team & activity end -->

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
      @endsection
