<?php include("header.php");?>

<link href="css/picSlider.css" rel="stylesheet" type="text/css">
<style>
.slidercstm 
    {  
        width:100%; 
        height:400px;  
        border-radius:5px;
    }
    .picSlider ul 
    {
        padding: 0px;
    }
</style>
    <script src="js/jquery.min.js"></script>
    <script src="js/picSlider.js"></script>
<script>
$(document).ready(function() {
					$('.demo-2').picSlider({animate: 'fade'});
				});
</script>
<div class="slidercstm">
    <div class="picSlider demo-2">
        <ul>
            <li><img src="images/slider1.jpg"></li>
            <li><img src="images/slider2.jpg"></li>
            <li><img src="images/c.jpg"></li>
        </ul>
    </div>
</div>
<!-- banner-bottom -->
<div class="container">
    <div class="abtsite">
        <h1>Website Information</h1>
        <p>
            We provide a such calling service  which is require by  comman man or many farm needed  and we do it for them 
We do calling for over clients and provide them  feedback of their client 
We do calling in provide information, invitation, guest list , and other service as massage to you and your friends and one messege to all in this service you can send one messege you more than 100 friends at very low cost.    
 </p>
    </div>
</div>


<div id="apparel" class="banner-bottom">
	<div class="container">
		<div class="bottom-header">	
			<h3>Services</h3>
			<p>we welcome you to have a service which makes you free from your works now you just have to update your contact number to your id and stay free from calling work no matter how hard your matter or how many you have contact we will do your work as soon as possible </p>
		</div>
		<div class="bottom-grids">
			<div class="col-md-3 bottom-grid">
				<div class="camera-grid">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, co
						ctetuer adipiscing elit, sed di
						 nonummy nibh euismod te.</p>
					<div class="readmore"><a href="about.php">Read more</a></div>
				</div>
				<div class="cam-font">
					<i class="fa fa-camera"></i>
				</div>
			</div>
			<div class="col-md-3 bottom-grid">
				<div class="camera-grid">
					<h3>Services</h3>
					<p>Lorem ipsum dolor sit amet, co
						ctetuer adipiscing elit, sed di
						 nonummy nibh euismod te.</p>
					<div class="readmore"><a href="services.php">Read more</a></div>
				</div>
				<div class="cam-font">
					<i class="fa fa-camera"></i>
				</div>
			</div>
			<div class="col-md-3 bottom-grid">
				<div class="camera-grid">
					<h3>Terms And Condition</h3>
					<p>Lorem ipsum dolor sit amet, co
						ctetuer adipiscing elit, sed di
						 nonummy nibh euismod te.</p>
					<div class="readmore"><a href="termandcondition.php">Read more</a></div>
				</div>
				<div class="cam-font">
					<i class="fa fa-camera"></i>
				</div>
			</div>
			<div class="col-md-3 bottom-grid">
				<div class="camera-grid">
					<h3>Contact Us</h3>
					<p>Lorem ipsum dolor sit amet, co
						ctetuer adipiscing elit, sed di
						 nonummy nibh euismod te.</p>
					<div class="readmore"><a href="contact.php">Read more</a></div>
				</div>
				<div class="cam-font">
					<i class="fa fa-camera"></i>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<?php include("footer.php");?>

</body>
</html>