<div class="table-responsive">
                                  <br>
                                        <table class="table table-bordered" style="overflow-x: scroll;">
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Enroll No</th>
                                              <th>Name</th>
                                              <th>Course</th>
                                              <th>Parents Name</th>
                                              <th>Parents Contact</th>
                                              <th>Contact</th>
                                              <th>Email</th>
                                              <th>Aadhar No</th>
                                              <th>Address</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                          <?php $i=1;?>
                                          @foreach($students as $e)
                                            <tr >
                                              <td>{{$i++}}</td>
                                              <td>{{$e->id}}</td>
                                              <td>{{$e->student_name}}</td>
                                              <td>{{$e->course->name}}</td>
                                              <td>{{$e->father_name}}</td>
                                              <td>{{$e->father_mobile}}</td>
                                              <td>{{$e->student_contact}}</td>
                                              <td>{{$e->email}}</td>
                                              <td>{{$e->adhar_no}}</td>
                                              <td>{{$e->current_add}}</td>
                                            </tr>
                                          @endforeach
                                          </tbody>
                                        </table>
                                  </div>