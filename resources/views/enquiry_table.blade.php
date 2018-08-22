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
   