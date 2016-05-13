<?php include("dbConfig.php");?>
<?php

//get all values
if(isset($_POST['submit'])){

	
    $first_name = $_POST["first_name"]; 
    $last_name = $_POST["last_name"]; 
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $confpassword = $_POST["confpassword"]; 
    $mobile = $_POST["mobile"]; 
    $organisation = $_POST["organisation"]; 
    $type = $_POST["type"]; 
    $proffession = $_POST["proffession"]; 
    $workphno = $_POST["workphno"]; 
    $address = $_POST["address"]; 
    $pincode = $_POST["pincode"]; 
    $city = $_POST["city"]; 
    $state = $_POST["state"]; 
    $country = $_POST["country"]; 
   // $submit = $_POST["submit"]; 

//check for email

$query = "SELECT * FROM users WHERE email = '$email'";
$rs_email = mysqli_query($con , $query);
$result_email = mysqli_fetch_array($rs_email);


if(isset($result_email['email']) && !empty($result_email['email']))
{
    $_SESSION['error'].="<br />Email already  exist" ;
}else{

	

            $query = "INSERT INTO users(first_name,last_name,email,password ,mobile_no,organisation,type,profession,work_ph_no,address,pin_code,city,state,country)
             VALUES('$first_name','$last_name','$email','$password' ,'$mobile','$organisation','$type','$proffession','$workphno','$address','$pincode','$city','$state','$country')";
          
            $rs = mysqli_query($con , $query);
            if($rs==1)
            {

                //set a successfully message

                $_SESSION['error']="Your account has been successfully created.<br /> an email has been sent to your given email address";
               // $_SESSION['login']= $first_name;
                //send a mail to given email address

                //$message = "Your account has been successfully created";
                	

                    $to      = $email;
                    $subject = 'the subject';
                    $message = 'Your account has been successfully created <br/> username=$name and password=$password';
                    $headers = 'From: webmaster@example.com' ;
                    mail($to, $subject, $message, $headers);



                
            }
}
}

?>
<?php include("header.php");?>
<div class="registration-form">
	<div class="container">
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
                  <h3>Registration Form</h3>
					 
					 <form name="form1" method="post" action="register.php"  >
						 <ul>
							 <li class="text-info">First Name: </li>
							 <li><input required type="text" name="first_name" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li><input required type="text" name="last_name" value=""></li>
						 </ul>				 
						<ul>
							 <li class="text-info">Email: </li>
							 <li><input required type="text" name="email" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Password: </li>
							 <li><input required type="password" name="password" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Re-enter Password:</li>
							 <li><input required type="password" name="confpassword" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li><input required type="text" name="mobile" value=""></li>
						 </ul>	
						 <ul>
							 <li class="text-info">Organisation:</li>
							 <li><input required type="text" name="organisation" value=""></li>
						 </ul>
						 <ul>
						 	<li class="text-info">Type:</li>
							 <li><select class="select-option" name="type">
							 	<option value="1">Normal</option>
							 	<option value="2">Commercial</option>
							 	<option value="3">Event Managers</option>
							 </select></li>
						 </ul>
						 <ul>
						 	<li class="text-info">Proffession:</li>
							 <li><input type="text" name="proffession" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Work Ph No.:</li>
							 <li><input type="text" name="workphno" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Address:</li>
							 <li><input required type="text" name="address" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info"> Pin Code:</li>
							 <li><input required type="text" name="pincode" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">City:</li>
							 <li><select class="select-option" name="city"
							 ><option>City Name</option>
							 </select></li>
						 </ul>	
						 <ul>
							 <li class="text-info">State:</li>
							 <li><select class="select-option" name="state"><option>State Name</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-info">Country:</li>
							 <li><input type="text" name="country" value=""></li>
						 </ul>
						 <input type="submit" name="submit" value="submit">
						  
					 </form>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Completely Free Account</h3>
            <p>we welcome you to have a service which makes you free from your works now you just have to update your contact number to your id and stay free from calling work no matter how hard your matter or how many you have contact we will do your work as soon as possible</p>
            </div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- registration-form -->
<?php include("footer.php");?>
</body>
</html>
