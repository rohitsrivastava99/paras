<?php include("dbConfig.php");?>
<?php 

if(isset($_POST['submit'])){

	
	
    $email = $_POST["email"]; 
     $password = $_POST["password"];
     $query = "SELECT * FROM users WHERE email = '$email'";
	$rs_email = mysqli_query($con , $query);
	$result_email = mysqli_fetch_array($rs_email);

	if(isset($result_email['email']) && !empty($result_email['email']))
	{
    	$_SESSION['login'] = $result_email['email'] ;
	}else{

 	}
}	 
?>
<?php include("header.php");?>
<!-- login -->
<div class="login">
	<div class="container">
		<div class="login-grids">
			<div class="col-md-6 log">
					 <h3>LOGIN</h3>
					 <img src="images/27.png" alt=""/>
					 <p>Welcome, please enter the following to continue.</p>
					<form name="form1" method="post" action="login.php"  >
						 <h5>User Name:</h5>	
						 <input type="text" name="email" value="">
						 <h5>Password:</h5>
						 <input type="password" name="password" value="">					
						 <input type="submit" name="submit" value="LOGIN">
						  <a href="#">Forgot Password ?</a>
					 </form>				 
			</div>
			<div class="col-md-6 login-right">
					<h3>NEW REGISTRATION</h3>
					<img src="images/27.png" alt=""/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>
					<a href="register.php">CREATE AN ACCOUNT</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //login -->

<?php include("footer.php");?>
</body>
</html>