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
            <li><img src="images/a.jpg"></li>
            <li><img src="images/b.jpg"></li>
            <li><img src="images/c.jpg"></li>
        </ul>
    </div>
</div>
<!-- banner-bottom -->
<div class="container">
    <div class="abtsite">
        <h1>Website Information</h1>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>


<div id="apparel" class="banner-bottom">
	<div class="container">
		<div class="bottom-header">	
			<h3>Services</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<div class="bottom-grids">
			<div class="col-md-3 bottom-grid">
				<div class="camera-grid">
					<h3>Responsive Design</h3>
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
					<h3>Responsive Design</h3>
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
					<h3>Responsive Design</h3>
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
					<h3>Responsive Design</h3>
					<p>Lorem ipsum dolor sit amet, co
						ctetuer adipiscing elit, sed di
						 nonummy nibh euismod te.</p>
					<div class="readmore"><a href="services.php">Read more</a></div>
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