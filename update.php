<?php
include("connection.php");
error_reporting(0);
?>

<html>
    <head>
        <title>Web Technology </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<style>
		body {

background-color:grey;
}


.box{
	width:300px;
	padding:40px;
	margin: 10px;
	border:2px solid black;
	position:absolute;
	top:5%;
	left:40%;
	bottom:10%;
	background-color:aqua;
	
	
}
input{
	border-style:solid;
	text-align:center;
	border:1px solid black;
	
	position:relative;
}
</style>
    </head>

    <body>

    <form class="box"  method="post">
	<fieldset>
	<h1 style="color:#E97017; text-align: center;">STUDENT FORM</h1><br>
<label> <b>Name:</b> </label>         
<input type="text" name="name" size="15"> <br> <br>  


<label><b> Rollno:</b> </label>         
<input type="text" name="rollno" size="15"> <br> <br>


 <label><b> Gender:</b></label>

  <input type="radio" id="male" name="gender" value="male">Male
 
  <input type="radio" id="female" name="gender" value="female">Female
  <br>
<br>  

  
<label  > <b>Faculty:</b>  </label>   
<select  name="faculty">  

<option value="science" >Science </option>  
<option value="management" >Management</option>  
<option value="humanities" >Humanities</option>  
</select>
<br> <br>  
<label><b>passed?  </b></label>
<input type="radio" id="yes" name="passed" value="yes">Yes
 
  <input type="radio" id="no" name="passed" value="yes">No <br><br>  

<center><button type="submit" class=" btn btn-primary">Submit</button></center>
</fieldset>
</form>  
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "button pressed";

        $fname = $_POST['name'];
        $rollno = $_POST['rollno'];
        $gender = $_POST['gender'];
        $faculty = $_POST['faculty'];
        $passed = $_POST['passed'];

        $query = "UPDATE STDFORM SET NAME ='$fname', ROLLNO='$rollno', GENDER='$gender', `FACULTY`='$faculty', PASSED='$passed' WHERE ROLLNO='$rollno' ";

        $data = mysqli_query($conn, $query);
        if($data){
            echo " updated successfully";
        }
        else{
            echo "record not updated";
        }
    }
    else{
        echo "not pressed";
    }
?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>

    </script>

    </body>
</html>