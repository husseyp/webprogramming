<html>
<head>
<link rel="shortcut icon" href="html.png" />
<title> CSI Registration Form|| </title>


<style>

html, body {
    height:100%;
} 




	
.k1 {
      font-family:   "Arial Black", "Arial Bold", Gadget, sans-serif;
	  font-weight: lighter;
	  font-size: 20px;
	  
	  }
 
td {
     font-family :  font-family: Arial, Helvetica, sans-serif;
	 font-size : 22px;
	 text-align :center;
	 
	 }
	 

   
	 
	 
.texta {

	border: 2px solid #765942;
	border-radius: 10px;
	padding: 25px;
        margin: 10;
        font-size : 15px;
        font-family : "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        
       }

body  {
    background-image: url("l.png");
	background-color: #FFF2E6;
	
       
	
    
   
}

form.f1 {
           font-family:Book Antiqua;
        }
		 
    
		

.k2 {
    background-image: url("y.png");
    background-size: 1900px 450px;
    
    
   

    
}
    

select {
    font-family: "Courier New", Courier, monospace;
    font-size : 16px;
	width : 30%;
           }

.p1 {
     font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
     text-align:center;
     }
	 

			 
input[type=text],[type=email],[type=tel] , select {
    
    padding: 12px 10px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid black;
    border-radius: 10px;
    box-sizing: border-box;
}

input[type=text],[type=email],[type=tel],[type=date] {
                     font-family : "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                     
                 }

input[type=submit] {
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:17px;
	 font-family : "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

input[type=submit]:hover {
    background-color: #45a049;
}

legend {
   font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif; 
   font-size :30px ;
   color: blue;
   }

</style>

</head>
<body>

<div class="k2">
<img src="hi.png" alt="DBIT LOGO" width="170" height="170" align="left"><img src="Csi_logo.jpg" alt="CSI LOGO" width="170" height="170" align="right"><p style="font-size:100px;text-align:center;color:white;text-shadow: 2px 2px 5px #00FA9A"><i> <strong><u> DBIT-CSI</u> </strong></i></p>

<p style="font-size:60px;text-align:center;color:white; text-shadow: 2px 2px 5px #66A3CC"><u><i> <strong>BRANCH- IT and COMPS</strong></u></i></p>
</div>
<h1><p class="p1" style="text-shadow: 2px 2px 5px red"> Membership registration form :</p></h1>


 <form name="myForm"    method="POST"  onsubmit="return validateForm()">
 
<table style="width:50%">

  

 <tr>
    <td>First name</td>
    <td>: </td>
    <td>
    <input type="text" name="fname"  style="text-transform : uppercase" placeholder="FirstName" ></td>
 </tr><tr><td><br></td></tr>
  
<tr>
  <td>Middle name </td>
  <td> :</td>
  <td>
  <input type="text" name="mname" width="10px" style="text-transform : uppercase" placeholder="MiddleName"></td>
</tr>  <tr><td><br></td></tr>
  
<tr>
  <td>Last name </td>
  <td> : </td>
  <td>
  <input type="text" name="lname" style="text-transform : uppercase" placeholder="LastName" > </td>
</tr> <tr><td><br></td></tr>
  
<tr>
  <td> Birthday </td>
  <td> : </td>
  <td>
  <input type="text" name="bday" placeholder="dd/mm/yyyy"> </td>
 </tr> <tr><td><br></td></tr>

 <tr>
  <td> Email-Id </td>
  <td> : </td>
  <td>
  <input type="email" name="email" placeholder="Email-Id"></td>
 </tr> <tr><td><br></td></tr>


 <tr>
  <td> Contact No. </td>
  <td> : </td>
  <td>
  <input type="tel" name="tel" maxlength ="10" placeholder="Contact No."> </td>
 </tr>
 <tr><td><br></td></tr>
 <tr>
  <td>
  
     City </td>  <td> : </td>
  
       <td> <select name="cty">
	           <option value="no" disabled selected >Select City</option>
              <option value="mum" >Mumbai</option>
              <option value="ngp">Nagpur</option>
              <option value="st">Surat</option>
              <option value="amd">Ahmedabad</option>
            </select> 
	   </td><br>
</tr>
 
<tr><td><br></td></tr>



  <tr>
    <td>Department </td>  <td> : </td> 
	
	<td>
      <select name="dept" id="demo1" >
	    <option value= "0" disabled selected>Select Department</option>
        <option value= "1" >Information Technology</option>
        <option value= "2">Computer Engineering</option>
        <option value= "3">Electronic and Telecommunication</option>
        <option value= "4">Mechanical Engineering</option>
     </select>
	</td> </tr><tr><td><br></td></tr>
	
  
  
  <tr>
  
    <td> Class </td> <td> : </td> 
	  <td>
         <select name="Class" id="demo2">
            <option value= "0" disabled selected>Select Class </option>
            <option value="1"  >FE </option>
            <option value="2" >SE</option>
            
            <option value="3">TE</option>
            <option value="4">BE</option>
            </optgroup>
        </select>
	</td></tr>	<tr><td><br></td></tr>
	
	
	
<tr>
  <td>
   Student Id </td> <td> : </td>
   
   <td>
      <input type="text" name="sid" placeholder="Student Id">
   </td>
</tr>
 
  <tr><td><br></td></tr>
  </table>
  
  <br><hr><br>


<h2><p style=" color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center">Duration for CSI</p></h2> 
	


<table style="width:50%">
  
 <tr>
   <td> 
      CSI Registration Duration </td> <td> : </td> <td> 
	  
	  <input type="radio" name="imem" value="1" onclick="return manageFee()"> 1yr
	  <input type="radio" name="imem" value="2" onclick="return manageFee()">2yr
      <input type="radio" name="imem" value="3" onclick="return manageFee()" > 3yr
      <input type="radio" name="imem" value="4" onclick="return manageFee()"> Lifetime
       <input type="radio" name="imem" value="no" onclick="return manageFee()"> No
       </td>
	   
    <tr><td><br><br></td></tr>

<tr>
   <td>
       DBIT-CSI Registration Duration </td> <td> : </td>  <td>
	   <input type="radio" name="Dmem" value="1" onclick="return manageFee()"> 1yr    
        <input type="radio" name="Dmem" value="2" onclick="return manageFee()"> 2yr
        <input type="radio" name="Dmem" value="3" onclick="return manageFee()"> 3yr
        <input type="radio" name="Dmem" value="no" >No </td><td></td></tr>
 
    <tr><td><br><br></td></tr>

<tr>
   <td>
      Fees to be paid </td> <td> : </td> 
         <td><input type="text" name="amt" disabled> </td></tr>
</table>
<br>
 
<hr><br>
<h2><p style=" color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;text-align: center">About Yourself</p></h2>
<p class="k1">Skills and Competances: </p><br><br>

 <textarea name="message" rows="10" cols="90" class="texta" placeholder="Add your skills over here.">

</textarea>
<br><br>


<p style="font-family :  font-family: Arial, Helvetica, sans-serif; font-size : 30px">
	 Technical Skills: </p><br><br>
	 

	   
	     <h2 style="font-size:20px;color: blue"> <input type="checkbox" name="member" value="python"> PYTHON &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   
                                              <input type="checkbox" name="member" value="java"> JAVA  &nbsp;&nbsp;&nbsp;
											  
	      <input type="checkbox" name="member" value="pytn">  C <br><br>
		 
		 
         <input type="checkbox" name="member" value="java"> HTML-CSS &nbsp;&nbsp;
	   
    
          <input type="checkbox" name="member" value="sql">MySql <br><br>
  
          <input type="checkbox" name="member" value="jq"> jQuery </h2> <br><br>
	

  
           <input type="submit" name="submit" value="Submit"><br>




</form> 

<script>
           
		    function validateForm() {
			  
    var x = document.forms["myForm"]["fname"].value;
    
    if (x == "") {
        alert("FirstName must be filled out");
        return false;
    }
    
    if(!isNaN(x))
		{
			alert("Firstname should be all characters");
			return false;
		}
	
	
	
	var y = document.forms["myForm"]["mname"].value;
    if (y == "") {
        alert("MiddleName must be filled out");
        return false;
    }

  if(!isNaN(y))
		{
			alert("Middlename should be all characters");
			return false;
		}
	
	var z = document.forms["myForm"]["lname"].value;
    if (z == "") {
        alert("LastName must be filled out");
        return false;
    }

  if(!isNaN(z))
		{
			alert("Lastname should be all characters");
			return false;
		}
    
    var dpname= document.myForm.dept.selectedIndex;
		if(dpname == 0){
			alert("Please Select the Department!!!");
			return false;
		}

  var classname= document.myForm.Class.selectedIndex;
		if(classname == 0){
			alert("Please Select the Class!!!");
			return false;
		}
    
}

  var cityname= document.myForm.cty.selectedIndex;
		if(cityname == 0){
			alert("Please Select your City!!!");
			return false;
		}
    
}



  
          

			function manageFee()
			{
				
				var t = document.forms["myForm"];
				
				
			    if (t.imem[0].checked == true)
					{
						disableDmem();
						t.amt.value="1150";
					}
				if (t.imem[1].checked == true)
					{
						disableDmem();
						t.amt.value="2150";
					}
				if (t.imem[2].checked == true)
					{
						disableDmem();
						t.amt.value="3150";
					}
				if (t.imem[3].checked == true)
					{
						disableDmem();
						t.amt.value="15000";
					}
				if (t.imem[4].checked == true)
					{
					    
						enableDmem();
						t.Dmem[3].disabled=true;
						disableImem();
						t.amt.value="";
						
					}
					
					
					if (t.Dmem[0].checked == true)
					{
						disableImem();
						t.amt.value="200";
					}
				if (t.Dmem[1].checked == true )
					{
						disableImem();
						t.amt.value="300";
					}
				if (t.Dmem[2].checked == true)
					{
						disableImem();
						t.amt.value="400";
					}
				if (t.Dmem[3].checked == true)
					{
						enableImem();

						disableDmem();
						t.amt.value="";
					}


			}
			
			function enableDmem() {
			
			var t = document.forms["myForm"];
			
			          t.Dmem[0].disabled= false;
					  t.Dmem[1].disabled= false;
					  t.Dmem[2].disabled= false;
			                       }
								   
			function enableImem() {
			
			var t = document.forms["myForm"];
			
                     t.imem[0].disabled= false;
					 t.imem[1].disabled= false;
					 t.imem[3].disabled= false;
					 t.imem[4].disabled= false;
					 
                                   }

            function disableDmem() {
			
			var t = document.forms["myForm"];
			
			        t.Dmem[0].disabled =true;
					t.Dmem[1].disabled =true;
					t.Dmem[2].disabled =true;
					t.Dmem[3].disabled =true;
					
					

                                    }

            function disableImem() {
			
			var t = document.forms["myForm"];
			
			        t.imem[0].disabled =true;
					t.imem[1].disabled =true;
                    t.imem[2].disabled =true;
					t.imem[3].disabled =true;
					
                                    }			
			

			
			
			
</script>
      <?php
    
		
	if(isset($_POST['submit']))
{
$Fn=$_POST["fname"];
$Mn=$_POST["mname"];
$Ln=$_POST["lname"];
$Bdate=$_POST["bday"];
$Email=$_POST["email"];
$Tel=$_POST["tel"];
$City=$_POST["cty"];
$Dept=$_POST["dept"];
$Class=$_POST["Class"];
$Sid=$_POST["sid"];
$Imem=$_POST["imem"];
$Dmem=$_POST["Dmem"];
$Fees=$_POST["amt"];
$Skills=$_POST["message"];
$Tskills=$_POST["member"];

include "connect.php";

$sql = "INSERT INTO membership VALUES('$Fn','$Mn','Ln','Bdate','Email','Tel','City','Dept','Class','Sid','Imem','Dmem','Fees','Skills','Tskills')";
      
		$result = mysqli_query($con,$sql);
		echo "<h2><font color=green>Member successfully added</font></h2>";
}

?>
</body>
</html>
