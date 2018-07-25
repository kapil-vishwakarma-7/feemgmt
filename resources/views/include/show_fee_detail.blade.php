         <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Student Detail</h1>
                  </div>
                 
                </div>
              </div>
              <div class="table-responsive"> 
              <table class="table   table-bordered table-hover">
                <tbody>
                  <tr>
                    <th class="">Student Name</th>
                    <th>Enrollment</th>
                    <th>Admission Yr</th>
                    <th>Contact</th>

                    <th>Total Fees</th>
                    <th>Paid Fees</th>
                    <th>Fees Due</th>    
                  </tr>
                  
                 <tr>
                  <td>{{$student->student_name}}</td>
                  <td>{{$student->id}}</td>
                  <td>{{$student->admission_year}}</td>
                  <td>{{$student->student_contact}}</td>
                  <td>{{$student->course->feeMaster->where('ac_year',$student->admission_year)->sum('amount')}}</td>
                  <td>{{ $student->fees->sum('amount')}}</td>
                  <td> <label>{{$student->course->feeMaster->where('ac_year',$student->admission_year)->sum('amount') - $student->fees->sum('amount') }}</label> </td>
                </tr>
                  
                  
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>