<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admission slip</title>
</head>
<style type="text/css">
body {
  background: rgb(204,204,204); 
}

/*@media screen and (min-width: 480px) {
    
}*/
/*page[size="A4"] {
  background: white;
  width: 24cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}*/
@media print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
  /*#D3D3D3*/
}

 .container-fluid{

  /*margin-top: -100px;*/
  width:1068.267717px;
  /*min-height: 40.7cm;*/
  height: 1585px;
 /* padding: 2cm;
  margin: 5cm auto;*/
  /*border: 1px #D3D3D3 solid;
  border-radius: 1px;*/
  background: white;
  /*box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);*/
    /*box-sizing: border-box;
  width:21cm;
  height:29.7cm;
  border: 1px solid black;*/
 }
 * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

 #img{
  box-sizing: border-box;
  width:5.2cm;
  height:7cm;
  border: 1px solid black;
 }
 #Admissionform{
margin-top:-15px;
 box-sizing: border-box;
 width: 400px;
 height: 40px;
 border: 2px solid black;border-right: 8px solid black;border-left: 8px solid black;
 } 
 #table1{

  margin-left:-470px;
  margin-top: 40px;
  box-sizing: border-box;
  width:210px;height:60px;
  border: 1px solid black;
  padding: 8px;
 }
 
 #studentmobile{
   box-sizing: border-box;
  width:400px;
  /*height:30px;*/
  border: 1px solid black;
 }
 #admissiondate{
  float: left;
  width: 210px;
   border-top: 1px solid black;
 }
 #cardno{
  margin-right:-450px;
  margin-top:-40px;
  font-size:25px;
 }
 #cardbox{
margin-top:-70px; 
 float: right;
 margin-right:35px;
  box-sizing: border-box;
  width:200px;
  height:50px;
  border: 1px solid black;padding: 8px;
 }
 #formno{
  float: left;
  width: 210px
 }
 #divimg{
  margin-top:-245px;
  margin-left: 807px;
 }

hr { 
    display: block;
    margin-top:15px;
    margin-bottom: 0.5em;
    margin-left:-56px;
    margin-right:-58px;
    border-style: inset;
    border-width: 1px;
    width:1010px; 
    


}
#checkbox{
 
      width: 25px;
    height: 25px;
    background: white;
    border: 1px solid black;
    /*margin: 20px 80px;*/
    /*position: relative;*/
    /*border-radius: 30px;*/
  
}
/*#innerdiv{
  width: 19cm;
  height: 100px;
  box-sizing: border-box;
  width:19cm;
  height:29.7cm;
  border: 1px solid black;
}*/
#date{
margin-right:35px;

}
#officeuse{
  margin-left:35px;
  margin-top: 35px
}
#formtable{
  width:1010px;
  margin-left:0px ;
}
#result{
      border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
}
#tabledata{
 border: 1px solid rgb(190, 190, 190);
    padding: 10px;

}
@media print { 

#pagecontents {
     width:100%;
     border:0px;
  }
}
</style>
<body>
<center><div>
	<div class="container-fluid" style="margin-top: 0px;" >
	  <div width="100%" style="margin-top: 0px">
      <div id="innerdiv">
	  	<h1 style="    font-size: 350%;">ULTRA SOFT</h1>
	  	<h4 style="margin-top:-44px; font-size:30px;">INSTITUTE OF COMPUTER EDUCATION</h4>
	  	<h4  style="margin-top: -35px;font-size:30px;">OBEDULLAGANJ</h4>
	  	<P style="margin-top: -35px;font-size:30px;">Contact<b>:</b>07480-224955, 9993376705, 9993800495</P>
	  	<p style="margin-top: -35px;font-size:30px;">E-mail<b>:</b>ultra.soft07@gmail.com</p>
	  	<h3 id="Admissionform" style="font-size:30px;">ADMISSION FORM</h3>
	  
	    <div id="divimg">
	  	   <img id="img" src="{{url('uploads/'.$e->image)}}">
	    </div>
      <div>
      	<p style="float: left;font-size:30px;" id="officeuse">For office use only</p>
       
      	<p style="float: right;font-size:30px;" id="date">Date of issue  <b>:</b>{{ $e->created_at->format('d/m/y') }}</p>
      </div>
     <br>
     <br>
     <div>
      <div>
        <!-- <td id="formno"><b>Form No</b><b>:</b></td>
      <td id="admissiondate"><b>Admission Date</b><b>:</b></td> -->
     <table id="table1" style="width: 450px;border-collapse: collapse;">
      <tr>
        <td id="tabledata" style="font-size:30px;">Form No.<b>:</b>{{$e->id}}</td>
        <!-- <td id="tabledata"></td> -->
      </tr>
      <tr >
        <td id="tabledata" style="font-size:30px;">Admission Date<b>:</b>{{ $e->created_at->format('d/m/y') }}</td>
        <!-- <td id="tabledata"></td> -->
      </tr>
     </table>
     </div>
     <div>
     <p id="cardno"><b>Card No. :</b></p>
     <!-- <div id="cardbox" style="" ><span style="font-size: 19px;text-align: center;">124578</span>
     </div> -->
     <table  id="cardbox">
       <tr>
         <td style="font-size: 19px;">1245632563</td>
       </tr>
     </table>
     </div>
     <hr>
     <table id="formtable">
       <tr>
         <td width="410px" height="50" style="font-size:27px;">Select Course candidate want to join </td>
         <td width="2px" ><b>:</b></td>
         <td width="580" colspan="3" style="font-size: 22px">{{$e->course->name}}</td>
       </tr>
       <tr>
         <td width="400px" height="50" style="font-size:27px;">Student's Full Name(in capital letters)</td>
         <td width="2px"><b>:</b></td>
         <td width="580" colspan="3" style="font-size: 22px">{{strtoupper($e->student_name) }}</td>
       </tr>
       <tr>
         <td width="400px" height="50" style="font-size:27px;">Father's/Guardian's Name</td>
         <td width="2px"><b>:</b></td>
         <td width="580" colspan="3" style="font-size: 22px">{{strtoupper($e->father_name) }}</td>
       </tr>
        <tr>
         <td width="400px" height="50" style="font-size:27px;">Mother's Name</td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3" style="font-size: 22px">{{strtoupper($e->mother_name) }}</td>
       </tr>
        <tr>
         <td width="400px" height="50" style="font-size:27px;">Date of Birth(DD/MM/YYY)</td>
         <td  width="2px"><b>:</b></td>
         <td   width="580"colspan="3" style="font-size: 22px">{{ $e->dob }}</td>
       </tr>
      <tr>
         <td width="400px" height="50" style="font-size:27px;">Father's/Guardian's Occuption</td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3" style="font-size: 22px">Farmer</td>
       </tr>
       <tr>
         <td width="400px" height="50" style="font-size:27px;">Local Address/Hostel Address</td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3" style="font-size: 22px"> {{$e->current_add }}  </td>
       </tr>
       <tr>
         <td width="400px" height="50" style="font-size:27px;">and Phone No.</td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3" style="font-size: 22px">{{$e->father_contact}}</td>
       </tr>
        
        <tr>
         <td width="400px" height="20"></td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3"></td>
       </tr>
        <tr>
         <td width="400px" height="20"></td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3"></td>
       </tr>

       <tr>
         <td width="400px" height="50" style="font-size:27px;">Permanent Address & Phone No.</td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3" style="font-size: 22px">{{$e->permanent_add }}</td>
       </tr>
      <tr>
         <td  width="400px" height="50"></td>
         <td  width="2px"><b>:</b></td>
         <td  width="580" colspan="3"></td>
       </tr>
             <tr>
         <td width="400px" height=""></td>
         <td  width="2px"><b></b></td>
         <td  width="580" colspan="3">
         </td>
         
       </tr>
      <tr>
      <tr>
         <td width="400px" height="50" style="font-size:27px;">Cateogry</td>
         <td width="2px" ><b>:</b></td>
         <td   width="100px" style="font-size:27px;"><span style="margin-top: 10px;position:relative;top: -5px;">GEN</span>
         @if($e->category == "Gen")
          <input style="margin-top: 10px" id="checkbox" type="checkbox" checked="">
          @else
          <input style="margin-top: 10px" id="checkbox" type="checkbox" >
          @endif
         </td>
         <td   width="140px" style="font-size:27px;"><span style="margin-top: 10px;position:relative;top: -5px;">SC/ST</span>
         
          @if($e->category == "SC/ST")
            <input style="margin-top: 10px" id="checkbox" type="checkbox" checked="">
          @else
            <input style="margin-top: 10px" id="checkbox" type="checkbox" >
          @endif

         </td></td>

         <td   width="340px" style="font-size:27px;"><span style="margin-top: 10px;position:relative;top: -5px;">OBC</span>
          @if($e->category == "OBC")
          <input style="margin-top: 10px" id="checkbox" type="checkbox" checked="">
          @else
          <input style="margin-top: 10px" id="checkbox" type="checkbox" >
          @endif
          </td></td>
       </tr>
      <tr>
           <tr>
         <td width="400px" height=""></td>
         <td  width="2px"><b></b></td>
         <td  width="580px" colspan="3"></td>
         
       </tr>
      <tr>
         <td width="400px" height="50" style="font-size:27px;"><span style="margin-top: 10px;position:relative;top: -5px;">Student's Mobile No(if available)</td>
         <td  width="2px"><b>:</b></td>
         <td   width="580px" colspan="3" ><input type="text" name="" style="width: 580px;height: 50px;font-size: 22px" value="{{$e->student_contact}}"></td>
       </tr>
             <tr>
         <td width="400px" height=""></td>
         <td  width="2px"><b></b></td>
         <td  width="580px" colspan="3"></td>
         
       </tr>
      <tr>
       <tr>
         <td width="400px" height="50" style="font-size:27px;">E-mail ID</td>
         <td   width="2px"><b>:</b></td>
         <td  width="580px" colspan="3" style="font-size: 22px;">{{$e->email}}</td>
       </tr>
       <tr>
         <td width="400px" height="50" style="font-size:27px;">Name of School & Board</td>
         <td   width="2px"><b>:</b></td>
         <td  width="580px" colspan="3" style="font-size:27px;">{{$e->board}}</td>
       </tr>
     </table>
     <table id="result" style="float: right;margin-right: 35px;width:760px;">
       
    <tr>
        <th scope="col" id="tabledata" style="font-size:27px;">Exam</th>
        <th scope="col" id="tabledata" style="font-size:27px;">Subject</th>
        <th scope="col" id="tabledata" style="font-size:27px;">Board/University</th>
        <th scope="col" id="tabledata" style="font-size:27px;">year</th>
        <th scope="col" id="tabledata" style="font-size:27px;">Obtain Marks</th>
    </tr>
    <tr>
        <td scope="row" id="tabledata" style="font-size:22px;text-align: center;">{{$e->exam}}</td>
        <td id="tabledata" style="font-size:22px;text-align: center;">{{$e->subject}}</td>
        <td id="tabledata" style="font-size:22px;text-align: center;">{{$e->board}}</td>
        <td id="tabledata" style="font-size:22px;text-align: center;">{{$e->year}}</td>
        <td id="tabledata" style="font-size:22px;text-align: center;">{{$e->obtain_mark.'/'.$e->total_mark}}</td>
    </tr>
    <b style="margin-left: 0px;font-size:27px;">Last Passed Exam</b><b>:</b>
</table>

       <table id="formtable">
        <tr>
         <td width="400px" height=""></td>
         <td width="2px" ><b></b></td>
         <td   width="100px"></td>
         <td   width="140px"></td>
         <td   width="340px"></td>
       </tr>
         <tr>
         <td width="510px" height="" style="font-size:27px;"><b>Medium</b></td>
         <td width="2px" ><b>:</b></td>
         <td   width="240px" style="font-size:27px;"><span style="margin-top: 10px;position:relative;top: -5px;">HINDI</span>

         @if($e->medium == 'Hindi')
          <input id="checkbox" type="checkbox" checked>
         @else
           <input id="checkbox" type="checkbox" >
         @endif
         </td>
         
         <td   width="340px" style="font-size:27px;" colspan="2"><span style="margin-top: 10px;position:relative;top: -5px;">ENGLISH</span><input id="checkbox" type="checkbox" ></td>
         <!-- <td   width="340px"></td> -->
       </tr>
       </table>
       <br>

       <p style="float: right;margin-right: 30px;font-size:27px;">Student's Signature</p>
        <p style="float: left;margin-left: 30px;font-size:27px;">Authorized Signature</p>
     </div>
   </div> 
    </div>
  </div>
</div>
</center>

<script type="text/javascript">
  $(document).ready(function(){
    window.print();
  });
</script>
</body>
</html>