<!DOCTYPE html>
<html>
<head>
  <title>Admission slip</title>
</head>
<style type="text/css">
body {
  background: rgb(204,204,204); 
}

 .container-fluid{
  width:1170px;
  height:830px;
    border-collapse: separate;
    border-spacing: 0px;
  border: 1px  black solid;
 
  border-radius: 10px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    
 }
 * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
#schoolname{
  
  font-size: 50px;
  margin-top:;
  margin-right: 10px;
}
.img{
  /*margin-top: 10px;*/
  width: 92px;
  height: 110px;
  float: left
}
.logo{
  /*padding: 10px;*/
  height: 140px;
  width: 130px;
  padding: 10px;
}
.school{
  width:1050px;
  height: 200px; 
  margin-top: -15px;
  float: right;
}
#address{
margin-top: -25px;
font-size: 32px;  
}
#phone{
  margin-top:-20px;
  font-size: 32px;
}
hr
{
  /*height:10px;*/
  width:1168px;
  /*margin-bottom: 20px;*/
    border-top: 1px solid black;
    /*background:red;*/
}
#receipt{
 font-size: 32px;
 float: left;
 margin-top: -5px; 
 /*margin-left: -180px;*/
}
#date{
  position: relative;
  font-size: 32px;
  float: right;
  margin-top: -5px;
  /*margin-right: -180px;*/
  /*padding-right: 60px;*/
}
#receiptdate{
  padding-left: 20px;
  padding-right: 20px;
 width: 1170px;
 height: 30px; 
}
#datevalue{
  /*padding-right:2020px;
  float: right;*/
}
#receiptfilldata{
  width: 1168px;
  height: 250px; 
padding-right: 20px;
padding-left: 20px;
/*background-color:yellow;*/
}

#Received4{
  font-size: 30px;
  margin-right: 0px;
 /*border:1px solid black;*/
 height: 35px;
 width: 1120px;
 display:flex;  
 
}
 #cardbox{
/*margin-top:-70px; */
 float:left;
 margin-right:35px;
  box-sizing: border-box;
  width:200px;
  height:50px;
  border: 1px solid black;padding: 8px;
  margin-left: 20px;
  /*margin-left: -427px;*/
 }
 #card{
  width: 1170px;
  height:30px;
 }
 
 #first{
<<<<<<< HEAD

   display: inline-block;
  width:320px;

  
 }
 #first2{
 display: inline-block;
  width:422px;
border-bottom: 2px dotted
 }
 #first3{
 display: inline-block;
  width:100px;
 
 }
 #first4{
 display: inline-block;
  width:276px;
 border-bottom: 2px dotted
 }
 #second1{
   display: inline-block;
  width:130px;

=======

   display: inline-block;
  width:320px;

  
 }
 #first2{
 display: inline-block;
  width:422px;
border-bottom: 2px dotted
 }
 #first3{
 display: inline-block;
  width:100px;
 
 }
 #first4{
 display: inline-block;
  width:276px;
 border-bottom: 2px dotted
 }
 #second1{
   display: inline-block;
  width:130px;

>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
  
 }
  #second2{
   display: inline-block;
  width:365px;
border-bottom: 2px dotted
 }
  #second3{
   display: inline-block;
<<<<<<< HEAD
  width:30px;
=======
  width:100px;
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
 
 }
  #second4{
   display: inline-block;
<<<<<<< HEAD
  width:600px;
=======
  width:530px;
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
  border-bottom: 2px dotted
 }
 #third1{
  display: inline-block;
  width:30px;
 
<<<<<<< HEAD
 }
 #third2{
  display: inline-block;
  width:400px;
  border-bottom: 2px dotted
 }
 #third3{
  display: inline-block;
  width:280px;
 
 }
 #third4{
  display: inline-block;
  width:408px;
 border-bottom: 2px dotted
 }
=======
 }
 #third2{
  display: inline-block;
  width:400px;
  border-bottom: 2px dotted
 }
 #third3{
  display: inline-block;
  width:280px;
 
 }
 #third4{
  display: inline-block;
  width:408px;
 border-bottom: 2px dotted
 }
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
 #fourth1{
display: inline-block;
  width:170px;
  
 }
 #fourth2{
display: inline-block;
  width:508px;
 border-bottom: 2px dotted
  }
  #fourth3{
display: inline-block;
  width:125px;

  }
  #fourth4{
display: inline-block;
  width:328px;
border-bottom: 2px dotted
  }
 </style>
<body>
<center>
  <div class="container-fluid" >
    <div style="">
      <div class="img">
      <img src="{{url('uploads/'.$i->image)}}" class="logo">
      </div>
      <div class="school">
      <h1 id="schoolname">{{ $i->name }}</h1>
      <h3 id="address">{{$i->address}}</h3>
      <h4 id="phone" >Phone No. {{$i->contact}}</h4>
      </div>
      <div>
        <hr>
        <h2 style="margin-top: -10px;margin-bottom: -10px;font-size:32px;">Fee Receipt</h2>
        <hr>
       </div>
       
       <div id="receiptdate">
         <p  id="receipt"><b>Receipt No.:</b>{{$e->recipt_no}}</p>
<<<<<<< HEAD
         <p id="date"><b>Date:</b>{{$e->fee_date->format('d-m-Y')}}</p>
=======
         <p id="date"><b>Date:</b>{{$e->fee_date}}</p>
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
       </div>
       <table id="receiptfilldata">
        <tr>
          <td>
            <div id="Received4">
            <div id="first" ><i>Received with thanks from</i></div>
<<<<<<< HEAD
            <div id="first2" > &nbsp;&nbsp;&nbsp;Shasank Vishwakarma</div>
            <div id="first3" >Roll No</div>
            <div id="first4" >&nbsp;0187cs151014</div>
=======
            <div id="first2" > &nbsp;&nbsp;&nbsp;{{$e->student->student_name}}</div>
            <div id="first3" >Roll No</div>
            <div id="first4" >&nbsp;{{'201801'.$e->student->id}}</div>
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
          </td>
        </tr>
        <tr>
          <td>
            <div id="Received4">
            <div id="second1" ><i>Mobile No</i></div>
<<<<<<< HEAD
            <div id="second2" >&nbsp;9931762370</div>
            <div id="second3" >of</div>
            <div id="second4" >&nbsp;Anjan Chaurasiya</div>
=======
            <div id="second2" >&nbsp;{{$e->student->student_contact}}</div>
            <div id="second3" >Son of</div>
            <div id="second4" >&nbsp;{{$e->student->father_name  }}</div>
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
          </td>
        </tr>
        <tr>
          <td>
            <div id="Received4">
            <div id="third1" ><i>by</i></div>
<<<<<<< HEAD
            <div id="third2" >&nbsp;Anjan Chaurasiya</div>
            <div id="third3" >Cheque/Pay Order No.</div>
            <div id="third4" >&nbsp;0124563</div>
=======
            <div id="third2" >&nbsp;{{$e->payment_mode}}</div>
            <div id="third3" >Cheque/Pay Order No.</div>
            <div id="third4" >&nbsp;{{$e->cheque_no}}</div>
>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
          </td>
        </tr>
        <tr>
          <td>
            <div id="Received4">
            <div id="fourth1" ><i>on account of</i></div>
<<<<<<< HEAD
            <div id="fourth2" >&nbsp;33698174090</div>
            <div id="fourth3" >Franchise</div>
            <div id="fourth4" >&nbsp;bhopal</div>
=======
            <div id="fourth2" >&nbsp; </div>

>>>>>>> 0ea9d8b5b34fc62346e9614c2ef0c157b0040699
          </td>
        </tr>      
       </table>
              <div id="card">
       <table  id="cardbox">
       <tr>
         <td style="font-size: 32px;">{{$e->amount}}</td>
       </tr>
       </table>
       </div>
       <div>
       <p style="margin-left: -610px;font-size: 32px;">*Checque/Payorders subject realization</p>
       <p style="margin-left:-870px;margin-top:-35px;font-size: 28px;">*Fee is not refundable</p>
       <p style="margin-left: -980px;margin-top: -30px;font-size: 28px;">*S.Tax No.:</p>
       <p style="margin-right: -880px;margin-top: -25px;font-size: 28px;">Authorize Signatory</p>
       </div>
       <div style="margin-left:0px;margin-top:0px;">
        <hr>
        <h2 style="margin-top: 0px;float:left;font-size: 32px;padding-left: 20px;">Testing - {{$e->fee_date}}</h2>
       </div>
    </div> 
  </div>
</center>
</body>
</html> 