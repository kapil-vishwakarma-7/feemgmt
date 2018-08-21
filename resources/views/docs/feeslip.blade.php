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
  width: 1170px;
  height: 290px; 
padding-right: 20px;
padding-left: 20px;
}
#Received{
  font-size: 30px;
  margin-right: 0px;
 
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
 #fill{
  /*width: 1170px;*/

 }
</style>
<body>
<center>
	<div class="container-fluid" >
	  <div style="">
      <div class="img">
      <img src="img/logo.png" class="logo">
      </div>
      <div class="school">
      <h1 id="schoolname">Delhi Academy of Medical Sciences Pvt. Ltd.</h1>
      <h3 id="address">4B,3rd Floor Grover Chamber,Pusa Road,New Delhi-110005</h3>
      <h4 id="phone" >Phone No.-011-4009 4009</h4>
      </div>
      <div>
        <hr>
        <h2 style="margin-top: -10px;margin-bottom: -10px;font-size:32px;">Fee Receipt</h2>
        <hr>
       </div>
       
       <div id="receiptdate">
         <p  id="receipt"><b>Receipt No.:</b></p>
         <p id="date"><b>Date:</b>8/7/18</p>
       </div>
       <div id="receiptfilldata">
       <div id="fill">
         <p id="Received" style="float:left;margin-left:0px;"><i >Received with thanks from</i>...........................................Roll No.................................................</p>
       </div>
       <div>
         <p id="Received" style="float: left;margin-top:-10px;"><i>Mobile No..................................................of</i>................................................................................</p>
       </div>
       <div>
         <p id="Received" style="float: left;margin-top:-10px;"><i>by......................................Cheque/Pay Order No.</i>........................................................................</p>
       </div>
       <div>
         <p id="Received" style="float: left;margin-top:-10px;"><i>on account of ......................................................................Franchise</i>.........................................</p>
       </div>
       </div>
       <div id="card">
       <table  id="cardbox">
       <tr>
         <td style="font-size: 32px;">1245632563</td>
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
        <h2 style="margin-top: 0px;float:left;font-size: 32px;padding-left: 20px;">Testing - 18/10/2018</h2>
       </div>
        
    </div> 
  </div>
</center>
</body>
</html>