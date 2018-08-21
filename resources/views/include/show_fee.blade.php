<div class="col-lg-6">
            <!--Project Activity start-->
            <section class="panel" style="min-height: 300px;max-height: 300px; overflow-x: hidden;overflow-y: scroll;">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Total Payment</h1>
                  </div>
                 
                </div>
              </div>
              <div class="table-responsive">
              <table class="table table-hover">
                <tbody>
                	<tr>
                	<th class="info">Semester</th>
                	<th class="info">Total Amount</th>

                	<th class="info">Paid Amount</th>
                	                	<th class="info">Due Amount</th>
                      <th class="info">Print</th>
                  </tr>
                  @foreach($student->course->semesters as $e)
                   <tr>
                  	<td>{{$e->name}}</td>

                  	<td>{{ $student->studentfees->where('semester_id',$e->id)->sum('amount') }}</td>
                  	<td>{{$student->fees->where('semester_id',$e->id)->sum('amount')}}</td>

                  	<td>{{
                        $student->studentfees->where('semester_id',$e->id)->sum('amount') - $student->fees->where('semester_id',$e->id)->sum('amount')

                    }} </td>
                  	
                    <td><i class="fa fa-print"></i></td>
                   </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>
                	   <div class="col-lg-6">
            <!--Project Activity start-->
            <section class="panel" style="min-height: 300px;max-height: 300px; overflow-x: hidden;overflow-y: scroll;">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>Previous Payment History</h1>
                  </div>
                 
                </div>
              </div>
              <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <tbody> 
                  	<tr>
                    	<th>#</th>
                    	<th>Semester</th>
                    	<th>Amount</th>
                    	<th>Payment Mode</th>
                    	<th>Date</th>
                      <th>Print</th>
                      </tr>
                 <?php $i=1;?>
                 @foreach($student->fees as $e)     
                     <tr>
                    	<td>{{'US'.$e->recipt_no}}</td>
                    	<td>{{$e->semester->name}}</td>
                    	<td>{{$e->amount}}</td>
                    	<td>{{$e->payment_mode}}</td>
                    	<td>{{$e->fee_date}}</td>
                    	<td><i class="fa fa-print"></i></td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
          </div>
            </section>
            <!--Project Activity end-->
          </div>