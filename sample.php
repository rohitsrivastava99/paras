<link href="css/admin.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/tb.css" rel="stylesheet" type="text/css" media="all" />
<?php include("dbConfig.php");?>
<?php include("functions.php");
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		header("location:shoppingcart.php");
		exit();}
	
?>
<?php
    include("header.php");
?>
<?php
	if(isset($_POST['photo'])){
		move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
		$q = mysqli_query($con,"UPDATE users SET image = '".$_FILES['file']['name']."' WHERE email = '".$_SESSION['login']."'");
	}
?>
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />

<div class="tbleft">
<?php
                        $query = "select * from products";
			$result=mysqli_query($con, $query);
			while($row=mysqli_fetch_array($result)){
		?> <?php } ?>
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#a" data-toggle="tab">Description</a></li>
          <li><a href="#b" data-toggle="tab">One messege to One</a></li>
          <li><a href="#c" data-toggle="tab">One message to All</a></li>
          <li><a href="#d" data-toggle="tab">Calling</a></li>
          <li><a href="#e" data-toggle="tab">Messege Work Details</a></li>
          <li><a href="#f" data-toggle="tab">Calling Work Details </a></li>
          <li><a href="#g" data-toggle="tab">Sent Messege Details</a></li>
          <li><a href="#h" data-toggle="tab">Update Your Number </a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="a">
            <h1>Schemes and plan</h1>
            <div class="sevpro">
                <div class="propic">
                     <center><img src="images/41.jpg"></center>
                 </div>
                 <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="file" name="file">
                        <input type="submit" name="photo">
                </form>
                <h3> Hello.. <?php echo $_SESSION['name'];?></h3>
                 <div class="prologout">
                     <div class="btn btn-info"><a href="#photo">Edit Profile</a></div>
                     <a href="logout.php"><div class="btn btn-danger">Log-Out</div></a>
                 </div>
            </div>
           <textarea rows="10" cols="75" name="comment" readonly><?php $str = $_SESSION['description']; echo $str; ?></textarea>
         </div>

         <div class="tab-pane" id="b">
            <h1>One 2 One Message</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Agree to all the terms and condition.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
<input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['serial'] = 1;?>)" />
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="c">
             <h1>One 2 All Message</h1>
             <form class="tbfrm" enctype="multipart/form-data" action="upload.php" method="post">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Agree to all the terms and condition.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
<input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['serial'] = 2;?>)" />
                     <br/>
                     <input type="file" name="fileToUpload" id="fileToUpload">
                     <input type="submit" value="Upload Image">
                 </div>
             </form>
         </div>
         <div class="tab-pane" id="d">
             <h1>Calling</h1>
             <form class="tbfrm" enctype="multipart/form-data" action="upload.php" method="post">
                <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Enter Your Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                 <input type="checkbox"><p>Agree to all the terms and condition.</p>
                 <div class="input-group">
                     <button class="btn btn-info">Submit</button>
                     <button class="btn btn-danger">Add To card</button>
<input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['serial'] = 3;?>)" />
                     <br/>
                     <input type="file" name="fileToUpload2" id="fileToUpload2">
                    <input type="submit" value="Upload Image">

                 </div>
             </form>
         </div>
         <div class="tab-pane" id="e">
             <h1>Notification For Sms</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Succesfull Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Pending Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Failed Message" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
         </div>
         <div class="tab-pane" id="f">
             <h1>Notification For Calling</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Succesfull Calling" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Yet To Call" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Failed Calling" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
         </div>
         <div class="tab-pane" id="g">
             <h1>Send Message Detail One to One</h1>
             <form class="tbfrm">
                <div class="form-group">
                    <textarea required type="text" name="Address" class="form-control" placeholder="Message Status" style="height: 100px; border-radius: 6px;"></textarea>
                </div>
             </form>
             
         </div>
         <div class="tab-pane" id="h">
             <h1>Update Number</h1>
             <form class="tbfrm">
             <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Your Mobile">
            </div>
            <input type="checkbox"><p>Searchable in search Bar.</p>
            <div class="input-group">
                    <button class="btn btn-defaut">Update Info</button>
            </div>
            </form>
             
         </div>
        </div>
    </div>

</div>
</form>
<?php
    include("footer.php");
?>
