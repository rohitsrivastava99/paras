<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<?php include("header.php");?>
<div id='fg_membersite'>
<div class="registration-form">
	<div class="container">
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
                  <h3>Registration Form</h3>
					 
					 <form id='register' action='<?php echo $fgmembersite->GetSelfScript();?>' method='post' accept-charset='UTF-8'>
<input type='hidden' name='submitted' id='submitted' value='1'/>
						 <ul>
							 <li class="text-info">First Name: </li>
							 <li><input type='text' name='firstname' id='firstname' value='<?php echo $fgmembersite->SafeDisplay('firstname') ?>' maxlength="50" /></li>
						 </ul>
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li><input type='text' name='lastname' id='lastname' value='<?php echo $fgmembersite->SafeDisplay('lastname') ?>' maxlength="50" /></li>
						 </ul>				 
						<ul>
							 <li class="text-info">Email: </li>
							 <li><input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /></li>
						 </ul>
						 <ul>
							 <li class="text-info">Password: </li>
							 <li><input type='password' name='password' id='password' maxlength="50" />
							 </li>
						 </ul>
						 <ul>
							 <li class="text-info">Re-enter Password:</li>
							 <li><input  type="password" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li><input type='text' name='mobile' id='mobile' maxlength="50" /></li>
						 </ul>	
						 <ul>
							 <li class="text-info">Organisation:</li>
							 <li><input  type="text" value="organisation" id="organisation"></li>
						 </ul>
						 <ul>
						 	<li class="text-info">Type:</li>
							 <li><select class="select-option">
							 	<option value="normal">Normal</option>
							 	<option value="commercial">Commercial</option>
							 	<option value="event">Event Managers</option>
							 </select><input  type="select" value="" id="select"></li>
						 </ul>
						 <ul>
						 	<li class="text-info">Proffession:</li>
							 <li><input  type="text" value="proffession" id="proffession"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Work Ph No.:</li>
							 <li><input type="text" value="workno" id="workno"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Address:</li>
							 <li><input type="text" value="address" id="address"></li>
						 </ul>
						 <ul>
							 <li class="text-info"> Pin Code:</li>
							 <li><input  type="text" value="pin" id="pin"></li>
						 </ul>
						 <ul>
							 <li class="text-info">City:</li>
							 <li><select class="select-option"><option>City Name</option>
							 </select></li>
						 </ul>	
						 <ul>
							 <li class="text-info">State:</li>
							 <li><select class="select-option"><option>State Name</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-info">Country:</li>
							 <li><input type="text" value="country" id="country"></li>
						 </ul>
						 <input type='submit' name='Submit' value='Submit'/>
						  
					 </form>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Completely Free Account</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div>
</div>
<!-- registration-form -->
<?php include("footer.php");?>
</body>
</html>
