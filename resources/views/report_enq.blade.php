                                  <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                           <th>#</th>
                                           <th>Name</th>
                                           <th>Email</th>
                                           <th>Contact</th>
                                           <th>Course</th>
                                           <th>Address</th>
                                        </tr>
                                      </thead>
                                     <tbody>
                                     @foreach($rep as $e )
                                       <tr>
                                        <td>{{$e->id}}</td>
                                        <td>{{$e->name}}</td>
                                        <td>{{$e->email}}</td>
                                        <td>{{$e->contact}}</td>
                                        <td>{{$e->course->name}}</td>
                                        <td>{{$e->address}}</td>
                                       </tr>
                                      @endforeach
                                     </tbody>
                                  </table>
